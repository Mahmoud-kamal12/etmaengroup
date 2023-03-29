var notificationIcon = document.getElementById('notification_icon') ? document.getElementById('notification_icon') : "",
    notificationView = document.getElementById('notification_view') ?  document.getElementById('notification_view') : "";


if(notificationIcon)
{
    notificationIcon.addEventListener('click' , () =>
{
    notificationView.classList.toggle('open');
})

}
