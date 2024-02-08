const axios = require("axios");
const routes = require("./routes.json")

const accessTokenFetch = (event) => {
    event.preventDefault()
    axios.post(routes.getToken)

}

document.querySelector("#getAccessToken").addEventListener("click", accessTokenFetch)