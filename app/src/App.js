import './App.css';
import React from 'react';
import ReactDOM from 'react-dom/client';
import TopNav from './components/TopNav';
import Section1 from './components/Section1';
import Section2 from './components/Section2';


export default function App() {
  return (
    <div id='page-top'>
      <TopNav />

        <div className='container1'>
          <Section1 />
          <Section2 />
        </div>
    </div>

  )
}

