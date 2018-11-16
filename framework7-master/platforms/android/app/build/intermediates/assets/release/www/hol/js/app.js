var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'My App',
  // App id
  id: 'com.myapp.test',
  // Enable swipe panel
  panel: {
    swipe: 'left',
  },
  // Add default routes
  routes: [
    {
      path: '/page1/',
      componentUrl: 'pages/page1.html',
    },
    {
      path: '/home/',
      componentUrl: 'pages/home.html',
    },
    {
      path: '/about/',
      componentUrl: 'pages/about.html',
    },
    {
      path: '/sportvasten/',
      componentUrl: 'pages/sportvasten.html',
    },
    {
      path: '/slider1/',
      componentUrl: 'pages/slider1.html',
    },
    {
      path: '/slider0/',
      componentUrl: 'pages/slider0.html',
    },
    {
      path: '/slider2/',
      componentUrl: 'pages/slider2.html',
    },
    {
      path: '/slider3/',
      componentUrl: 'pages/slider3.html',
    },
    {
      path: '/slider4/',
      componentUrl: 'pages/slider4.html',
    },
    {
      path: '/slider5/',
      componentUrl: 'pages/slider5.html',
    },
    {
      path: '/slider6/',
      componentUrl: 'pages/slider6.html',
    },
    {
      path: '/slider7/',
      componentUrl: 'pages/slider7.html',
    },
    {
      path: '/slider8/',
      componentUrl: 'pages/slider8.html',
    },
    {
      path: '/info/',
      componentUrl: 'pages/info.html',
    },
    {
      path: '/mainpage/',
      componentUrl: 'pages/mainpage.html',
    },
    {
      path: '/shop/',
      componentUrl: 'pages/shop.html',
    },
    {
      path: '/coach1/',
      componentUrl: 'pages/coach1.html',
    },
    {
      path: '/coach2/',
      componentUrl: 'pages/coach2.html',
    },
    {
      path: '/coach3/',
      componentUrl: 'pages/coach3.html',
    },
    {
      path: '/coach4/',
      componentUrl: 'pages/coach4.html',
    },
    {
      path: '/choose/',
      componentUrl: 'pages/choose.html',
    },
    {
      path: '/havecoach/',
      componentUrl: 'pages/havecoach.html',
    },
    {
      path: '/coachholder/',
      componentUrl: 'pages/coachplaceholder.html',
    },
    {
      path: '/coachdatum/',
      componentUrl: 'pages/coachdatum.html',
    },
    {
      path: '/graphic/',
      componentUrl: 'pages/graphic.html',
    },
     {
      path: '/webshop/',
      componentUrl: 'pages/webshop.html',
    },
    {
      path: '/coach1_meni/',
      componentUrl: 'pages/coach1_with_meni.html',
    },
    {
      path: '/coach2_meni/',
      componentUrl: 'pages/coach2_with_meni.html',
    },
    {
      path: '/coach3_meni/',
      componentUrl: 'pages/coach3_with_meni.html',
    },
    {
      path: '/coach4_meni/',
      componentUrl: 'pages/coach4_with_meni.html',
    },
    {
      path: '/user/',
      componentUrl: 'pages/user.html',
    },
    {
      path: '/user_date/',
      componentUrl: 'pages/user_date.html',
    },
    {
      path: '/instellingen/',
      componentUrl: 'pages/instellingen.html',
    },
    {
      path: '/toggle/',
      componentUrl: 'pages/toggle.html',
    },
    {
      path: '/language/',
      componentUrl: 'pages/lan.html',
    },
    {
      path: '/list/',
      componentUrl: 'pages/list.html',
    },
    {
      path: '/list_afb/',
      componentUrl: 'pages/list_afb1.html',
    },
    {
      path: '/list_afb2/',
      componentUrl: 'pages/list_afb2.html',
    },
    {
      path: '/list_afb3/',
      componentUrl: 'pages/list_afb3.html',
    },
    {
      path: '/list_afb4/',
      componentUrl: 'pages/list_afb4.html',
    },
    {
      path: '/list_afb5/',
      componentUrl: 'pages/list_afb5.html',
    },
    {
      path: '/list_afb6/',
      componentUrl: 'pages/list_afb6.html',
    },
    {
      path: '/list_afb7/',
      componentUrl: 'pages/list_afb7.html',
    },
    {
      path: '/list_afb8/',
      componentUrl: 'pages/list_afb8.html',
    },
    {
      path: '/list_afb9/',
      componentUrl: 'pages/list_afb9.html',
    },
    {
      path: '/list_afb10/',
      componentUrl: 'pages/list_afb10.html',
    },
    {
      path: '/login/',
      componentUrl: 'pages/login.html',
    },
    
 
  ],
  // ... other parameters
});
var $$ = Dom7;

var mainView = app.views.create('.view-main');

var notificationClickToClose = app.notification.create({
  icon: '<i class="icon demo-icon">7</i>',
  title: 'Framework7',
  titleRightText: 'now',
  subtitle: 'Notification with close on click',
  text: 'Click me to close',
  closeOnClick: true,
});
$$('.open-click-to-close').on('click', function () {
  notificationClickToClose.open();
});