import React from 'react';
import ReactDOM from 'react-dom/client';
import {BrowserRouter, Switch, Routes, Route} from "react-router-dom";
import './index.css';
import App from './App';
import Blog from './blogsrc/Main';
import SignUpUser from './signupuser.php';


import reportWebVitals from './reportWebVitals';
import {
 createBrowserRouter,
  RouterProvider,
} from "react-router-dom";
const router = createBrowserRouter([
  {
    path: "/",
    element: <App/>
  },
  {
    path: "Blog",
    element: <Blog/>
  },
  {
    path: "C:\wamp64\www\GitHub\Cmd-FHackathon\app\signupuser.php",
    element: <SignUpUser/>
  }
]);
const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  
 <RouterProvider  router = {router}>
 </RouterProvider>

);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
