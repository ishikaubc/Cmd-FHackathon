
# from dotenv import load_dotenv
from random import choice
#pythfrom flask import Flask, request

import os
import openai
# load_dotenv()
openai.api_key = "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"
completion = openai.Completion()

# response = openai.Completion.create(
#   model="text-davinci-003",
#   prompt="Hello, I am your blood donor buddy. I will help you to know if you are fit to donate blood or not\n\nUser: Hi, I want to register to donate blood\nBot:   Okay, sounds good. What is your age?\n\nUser: I am 20 years old. \nBot: Okay, may I ask if you had any past medical history?\n\nUser: No, I am all good.\nBot: Okay, did you get a tattoo done within past 12 month?\n\nUser: No.\nBot:  You are eligible to donate blood.  Please contact your local blood bank to schedule an appointment. Thank you for your willingness to contribute to this noble cause.\n\n\n\n\n\n",
#   temperature=0.7,
#   max_tokens=256,
#   top_p=1,
#   frequency_penalty=0,
#   presence_penalty=0
# )
# start_sequence = "\nBot:"
# restart_sequence = "\n\nUser:"
# session_prompt = "Hello, I am your blood donor buddy. I will help you to know if you are fit to donate blood or not\n\nUser:Hi,I want to register to donate blood\nBot:Okay, sounds good. What is your age?\n\nUser:I am 20 years old.\nBot:Okay, may I ask if you had any past medical history?\n\nUser:No, I am all good.\nBot:Okay, did you get a tattoo done within past 12 month?\n\nUser:No.\nBot:You are eligible to donate blood.  Please contact your local blood bank to schedule an appointment. Thank you for your willingness to contribute to this noble cause."

# openai.api_key = os.getenv("") # replace with your API key

def ask(question, chatHistory):
  history = '\n'.join(chatHistory)
  prompt_text = f"{history}\nUser: {question}"
  response = openai.Completion.create(
    model="text-davinci-003",
    prompt=prompt_text,
    max_tokens=2048,
    top_p=1,
  )
  response = response.choices[0].text
  print(response)
  chatHistory.append(chatHistory)
 
def main():
  initialPrompt = "Pretend you are a blood donor diagnosis chat bot. Ask the user questions about their age and health. The user will indicate their responses in the format User: <response>. Respond in the format Bot: <response>. Begin the conversation."
  chatHistory = [initialPrompt, "Bot: Hi! How can I help you?"]
  print("\n".join(chatHistory))
  while True:
      myOn = input()
      ask(myOn, chatHistory)
main()