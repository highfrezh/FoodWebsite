import Main from './components/restaurant/Main';
import Register from './components/restaurant/Register';
import Login from './components/restaurant/Login';
import Profile from './components/restaurant/Profile';
import ResetPassword from './components/restaurant/ResetPassword';
import NotFound from './components/NotFound';


export default{
    mode: 'history',

    routes: [
        { 
            path: '/',
            component: Main,
            name: "Main"
        },

        { 
            path: '/register',
            component: Register,
            name: 'Register'
        },

        { 
            path: '/login',
            component: Login,
            name:  "Login"
        },

        { 
            path: '/profile',
            component: Profile,
            name:  "Profile"
        },

        { 
            path: '/resetPassword',
            component: ResetPassword,
            name:  "ResetPassword"
        },

        { 
            path: '*',
            component: NotFound
        }
    ]
}





