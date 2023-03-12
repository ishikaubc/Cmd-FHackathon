import './App.css';
import React from 'react';
import ReactDOM from 'react-dom/client';
import TopNav from './components/TopNav';
import Section1 from './components/Section1';
import Section2 from './components/Section2';
import ChatBot from 'react-simple-chatbot';
import { ThemeProvider } from 'styled-components';

const steps = [
  {
    id: '0',
    message: 'Hey User',
    end: true
  },
  {
    id: '1',

    // This message appears in
    // the bot chat bubble
    message: 'How can I help you today',
    trigger: '2'
}, {
    id: '2',

    // Here we want the user
    // to enter input
    user: true,
    trigger: '3',
}, {
    id: '3',
    message: " I am doing all good. I want your help",
    trigger: 4
}, {
    id: '4',
    options: [
         
        // When we need to show a number of
        // options to choose we create alist
        // like this
        { value: 1, label: 'Donate Blood' },
        { value: 2, label: 'Find a donor' },

    ],
    end: true
}
];




export default function App() {
  return (
    <div id='page-top'>
      <TopNav />

        <div className='container1'>
          <Section1 />
          <Section2 />
     
      <div className = "App">
        <h1>Welcome to LifeConnect</h1>
        <ChatBot steps = {steps}/>
      </div>
      </div>
      </div>
    )
  }


 

 
        