# Cmd-FHackathon

Aim: To build a web application using React that connects blood donors from different parts of the world to the recepients. 

Target Audience: Patients in Canada (due to time contraint, we kept our database structure in MySQL small to easily implement it using PHP in React and Python. 

Prototype of the Website Using Figma:
<img width="365" alt="image" src="https://user-images.githubusercontent.com/105883848/224561551-0b115871-2b1c-46d1-87cd-5ae6fcdf5936.png">
<img width="360" alt="image" src="https://user-images.githubusercontent.com/105883848/224561586-83fc8638-2eb5-4ae4-b013-0ff2eda83e30.png">
<img width="722" alt="image" src="https://user-images.githubusercontent.com/105883848/224561634-3e7f4236-c83b-4805-8fb5-eb033c73c9da.png">
<img width="906" alt="image" src="https://user-images.githubusercontent.com/105883848/224561785-4edc0018-2f0a-4866-8230-991d8f97f6b6.png">

Implemented features of the website:
1. User Authentication - User can sign up as a donor, or as a user to find a donor. An input validator is implemented to check if the username, password meet the given conditions, password incryption to ensure security using hash function in PHP. 
2. Eligibility Chatbot- The website bot checks eligibility if the user is eligible to donate blood. Potential feature- if the user can't donate due to restrictions, direct them to fundraising page. 
    <img width="716" alt="image" src="https://user-images.githubusercontent.com/105883848/224562574-87f334ce-7d94-4b69-986a-afd666c99645.png">

3. Connect user to donor based on location - Once the user selects their location from the database of 1700 Canadian cities provided, LifeConnect searches the donor database and finds the donor located closest to the given location. The matched donor is returned to the user who can accept the match which will then be stored in the matches database. 












Potential Features for long term implementation of the website
1. Inclusivity in Trans HealthCare by 
2. Book an Appointment feature- LifeConnect will have a feature where potential donors and users can book an appointment to meet virtually/online, patients can mark their important schedules in the LifeConnect calendar to get notficiations through email/message using Twilio API.
3. Implement features to help in HealthCare Research- Use Image processing tools and NLP features to contribute to the health care industry in research.

Programming Languages Used:
Prototyping, UX/UI design - Figma
Front-end programming of the website- React, HTML, CSS, JavaScript, BootStrap(for icons)
Back- end prgramming- PHP, MySQL, Python, Node JS.
API used- Open AI API. 









