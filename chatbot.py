
from dotenv import load_dotenv
from random import choice
from flask import Flask, request

import os
import openai
load_dotenv()
openai.api_key = "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"
completion = openai.Completion()

response = openai.Completion.create(
  model="text-davinci-003",
  prompt="Hello, I am your blood donor buddy. I will help you to know if you are fit to donate blood or not\n\nUser: Hi, I want to register to donate blood\nBot:   Okay, sounds good. What is your age?\n\nUser: I am 20 years old. \nBot: Okay, may I ask if you had any past medical history?\n\nUser: No, I am all good.\nBot: Okay, did you get a tattoo done within past 12 month?\n\nUser: No.\nBot:  You are eligible to donate blood.  Please contact your local blood bank to schedule an appointment. Thank you for your willingness to contribute to this noble cause.\n\n\n\n\n\n",
  temperature=0.7,
  max_tokens=256,
  top_p=1,
  frequency_penalty=0,
  presence_penalty=0
)
start_sequence = "\nBot:"
restart_sequence = "\n\nUser:"
session_prompt = "Hello, I am your blood donor buddy. I will help you to know if you are fit to donate blood or not\n\nUser:Hi,I want to register to donate blood\nBot:Okay, sounds good. What is your age?\n\nUser:I am 20 years old.\nBot:Okay, may I ask if you had any past medical history?\n\nUser:No, I am all good.\nBot:Okay, did you get a tattoo done within past 12 month?\n\nUser:No.\nBot:You are eligible to donate blood.  Please contact your local blood bank to schedule an appointment. Thank you for your willingness to contribute to this noble cause."

<<<<<<< HEAD
openai.api_key = os.getenv("") # replace with your API key
=======
>>>>>>> 0b8982d5f9533c0ebe69779fd2d383fd5a1cdfb6


def ask(question, chat_log=None):
    prompt_text = f'{chat_log}{restart_sequence}: {question}{start_sequence}:'
    response = openai.Completion.create(
      engine="davinci",
      temperature=0.7,
      max_tokens=150,
      top_p=1,
      frequency_penalty=0,
      presence_penalty=0.3,
      stop=["\n"],
    )
    return print(response.choices[0].text)
 
def main():
    while True:
        print('GPT:Ask me a question\n')
        myOn = input()
        ask(myOn)
        print('\n')
main()