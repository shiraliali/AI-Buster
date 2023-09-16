
#  AI Buster

AI Buster is a Free & Open source bot that detects and scores AI generated codes.



## Demo

Aceess to latest version deployed: [AI Buster Demo](https://ai-buster.awizhe.com)


## 🔗 Links
[![Buy Me A Coffe](https://img.shields.io/badge/buy_me_A_Coffe-000?style=for-the-badge&logo=ko-fi&logoColor=white)](https://daramet.com/aly)

[![twitter](https://img.shields.io/badge/twitter-1DA1F2?style=for-the-badge&logo=twitter&logoColor=white)](https://twitter.com/aly)


## Installation

To install AI Buster's core you need to clone project and extract it on your own server.

### How it works?
AI Buster using an api endpoint to recive analysis requests and return response to them by JSON format.

Request should send as Form data and the name of property that is sent must be `data`. It's accessable as `$_POST['data']` in api core.

### What is the analysis endpoint?
All requestes should send to `/api/analyze`.
    
