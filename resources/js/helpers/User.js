class User{

    // store the user to the local storage
    storeUser(user){
        localStorage.setItem('user',user);
    }

    // get the user from local storage
    getUser(){
        return JSON.parse(localStorage.getItem('user'));
    }

    // check if user is logged
    isLogin(){
         if(this.getUser() !== null) {
             return this.getUser()
         }else{
             return  null;
         }
    }

    // check if user is admin
    isAdmin(){
        return this.isLogin() && this.getUser().admin === "admin";
    }

    // remove the user from local storage ==> logout
    logout(){
        localStorage.removeItem('user');
    }

}
export default User = new User();
