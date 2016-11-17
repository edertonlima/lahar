<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
<script>
var OneSignal = window.OneSignal || [];
OneSignal.push(["init", {
  appId: "208f4373-d687-470a-97fc-d1639337055c",
  autoRegister: false, /* Set to true to automatically prompt visitors */
  subdomainName: 'https://lahar-novo.onesignal.com',
  notifyButton: {
      enable: true /* Set to false to hide */
  },
  webhooks: {
    cors: false, // Defaults to false if omitted
    'notification.displayed': 'http://aceite.lahar.com.br/robo_recebe_push_onesignal_displayed', // e.g. https://site.com/hook
    'notification.clicked': 'http://aceite.lahar.com.br/robo_recebe_push_onesignal_clicked'
    // ... follow the same format for any event in the list above
  }
}]);
</script>

<link rel="stylesheet" type="text/css" href="css/responsivo.css">