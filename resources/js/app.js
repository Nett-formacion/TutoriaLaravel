// app.js
import React from 'react';
import ReactDOM from 'react-dom';
import ExampleComponent from './components/ExampleComponent';

if (document.getElementById('react-root')) {
    ReactDOM.render(<ExampleComponent />, document.getElementById('react-root'));
}
