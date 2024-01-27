import React from 'react';
import './App.css';
import ReactDOM from 'react-dom/client';
import AppRouter from './components/pages/index.tsx';
import 'bootstrap/dist/css/bootstrap.min.css';

const root = ReactDOM.createRoot(document.getElementById('root') as HTMLElement);
root.render(
  <React.StrictMode>
    <AppRouter/>
  </React.StrictMode>
);