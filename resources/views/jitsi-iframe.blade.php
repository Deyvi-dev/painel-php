<div id="meet"></div>
<script src="https://meet.jit.si/libs/external_api.min.js"></script>
<script>
    const domain = 'meet.jit.si';
    const options = {
        roomName: 'JitsiMeetAPIExample',
        width: 700,
        height: 700,
        parentNode: document.querySelector('#meet'),
        lang: 'de',
        configOverwrite: {
            startWithAudioMuted: <?php echo $startWithAudioMuted ?>,
            securityUi: {
    hideLobbyButton: true,
    disableLobbyPassword: <?php echo $startWithVideoMuted ?>
        }
        }
    };
    const api = new JitsiMeetExternalAPI(domain, options);

    // Alerta para verificar o valor de disableLobbyPassword
    alert('disableLobbyPassword: <?php echo $startWithVideoMuted; ?>');
</script>
