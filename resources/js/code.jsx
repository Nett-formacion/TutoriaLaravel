import React from "react";
import {createRoot} from "react-dom/client.js";
export default function Code(){
    return (
        <>
            <h1>Por fin te veo</h1>
        </>
    );
}
if (document.getElementById('codereact')){
    createRoot(document.getElementById('codereact')).render(<Code/>);

}
