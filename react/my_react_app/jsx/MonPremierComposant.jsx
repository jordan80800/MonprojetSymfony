import React, { useEffect, useState } from 'react';
import axios from 'axios';

const MonPremierComposant = () => {
  const [response, setResponse] = useState(null);

  useEffect(() => {
    axios.get('https://127.0.0.1:8000/api/categories')
      .then(function (response) {
        console.log(response);
        setResponse(response.data); 
      })
      .catch(function (error) {
        console.log(error);
      });
  }, []); 

  
};

export default MonPremierComposant;


