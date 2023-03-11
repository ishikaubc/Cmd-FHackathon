
import openai
import os

openai.api_key = os.getenv("") # replace with your API key

# set up the OpenAI API parameters
model_engine = "davinci" # or another language model
max_tokens = 60
temperature = 0.5
stop = "\n"

# define a function to generate a response to user input
def generate_response(prompt):
    response = openai.Completion.create(
        engine=model_engine,
        prompt=prompt,
        max_tokens=max_tokens,
        temperature=temperature,
        stop=stop,
    )

    message = response.choices[0].text.strip()
    return message

# define a function to handle user input and generate a response
def handle_input(user_input):
    prompt = f"User: {user_input}\nBot:"
    response = generate_response(prompt)
    return response

# set up a loop to handle user input and generate responses
while True:
    user_input = input("You: ")
    response = handle_input(user_input)
    print(response)
