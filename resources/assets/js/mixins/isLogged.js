var isLoggedMixin = {
  methods: {
    checkIfLogged(){
        var vm = this;
        return new Promise((resolve, reject) => {
          axios.get('/sessionStatus')
             .then(response => {
                resolve(response.data.user);
             })
             .catch(error => {
                reject(error.response.data);
             });
        })
        
    }
  }
}

export default isLoggedMixin;