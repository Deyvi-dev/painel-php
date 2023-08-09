<div id="meet"></div>
<script src="https://meet-aulas.com.br/libs/external_api.min.js"></script>
<script>
    const domain = 'meet-aulas.com.br';
    const options = {
        roomName: '{{ $teacher->name }}-{{ $teacher->meeting_link }}',
        width: 700,
        height: 700,
        parentNode: document.querySelector('#meet'),
        lang: 'pt',
        configOverwrite: {
            startWithAudioMuted: <?php echo $startWithAudioMuted ?>,
            securityUi: {
    hideLobbyButton: true,
    disableLobbyPassword: <?php echo $startWithVideoMuted ?>
        }
        }
    };
    const api = new JitsiMeetExternalAPI(domain, options);

</script>
