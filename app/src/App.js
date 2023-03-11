import './App.css';
import React from 'react';
import ReactDOM from 'react-dom/client';
import Header from './components/Header';
import Section1 from './components/Section1';
import Section2 from './components/Section2';

function App() {
  return (
    <div className='homePage'>
      <Header />
      <div className='frame'>
        <Section1 />
        <Section2 />
      </div>
    </div>
  );
}

export default App;
