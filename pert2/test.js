
// const express = require('express');
// const app = express()

// app.get('/', (res,req) ={

// })

const url ='https://api.coindesk.com/v1/bpi/currentprice.json';

fetch( url)
    .then(response => response.json ())
    .then(data =>{
        console.log('BITCOIN PRICE Index:');
        console.log(`USD : ${data.bpi.USD.rate}`);
        console.log(`EUR : ${data.bpi.EUR.rate}`);
    })

    .catch(error => {
        console.log('error data tidak ditemukan',error);
    })