import axios from 'axios';

let BaseApi = axios.create({
  baseURL: "http://localhost:8000/api"
});

export function Api (){
  let token = localStorage.getItem('token');

  if(token){
    BaseApi.defaults.headers.common["Authorization"] = 'Bearer ' + token;
  }
  return BaseApi;
};

const state = {
  errors: [],
  userProfile: null
};

const getters = {
  errors: state => state.errors,
  userProfile: state=>state.userProfile
};

const actions = {
  loginRequest({ commit }, data){

    axios.post('api/login', data )
    .then(response => {
      if(response.data){
        localStorage.setItem(
          "loginUser", response.data.user.username
        );
        localStorage.setItem(
          "token", response.data.token
        );
      }
        Toast.fire({
        icon: 'success',
        title: 'login successfully'
      });

      window.location.replace("/");
      // commit("loginUser", response.data);
      
    })
    .catch((error) => {
      commit("setErrors", error.response.data.errors);
    })
    
  },
  
  logoutRequest({commit}){
    Api().post('/logout').then((response) => {
      if (response.data) {
        localStorage.removeItem(
          "loginUser"
        );
        localStorage.removeItem(
          "token"
        );

      }
      Toast.fire({
        icon: 'success',
        title: 'logout successfully'
      });
      window.location.replace("/");
    })
  },
  
  editProfileRequest({commit}, payload){
    Api().put(`/editProfile/${payload.id}`, payload.form).then(()=> {
      Toast.fire({
        icon: 'success',
        title: 'Update is successfully'
      });
      Fire.$emit('updateData');
    }).catch((error) => {
      commit("setErrors", error.response.data.errors);
    })
  }
  
};

const mutations = {
  setErrors: (state, errors) => (state.errors = errors),
  userProfile: (state, userProfile) => (state.userProfile = userProfile)

};

export default {
  Api,
  state,
  getters,
  actions,
  mutations
};