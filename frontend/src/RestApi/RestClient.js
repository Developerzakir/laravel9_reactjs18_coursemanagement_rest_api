import axios from 'axios';

class RestClient {

  static GetRequest = (getUrl) => {
    return axios.get(getUrl).then(response => {
      return response.data;
    }).catch(error => {
      console.error("Error fetching data", error);
      return null;  // It's okay to return null, but we'll handle this in the component
    });
  }

  static PostRequest = (postUrl,postJson) => {
    let config = {
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
      }
    }

    return axios.post(postUrl,postJson,config).then(response => {
      return response.data;
    }).catch(error => {
      console.error("Error fetching data", error);
      return null;  // It's okay to return null, but we'll handle this in the component
    });
  }

}

export default RestClient;
