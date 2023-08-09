<style>
    .form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f7f7f7;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .form-group {
        margin-bottom: 10px;
    }

    .form-label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-checkbox {
        display: inline-block;
        margin-right: 10px;
    }

    .form-button {
        background-color: #3490dc;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<div class="form-container">
    <form method="post" action="{{ route('jitsi.startMeeting') }}">
        @csrf
        <div class="form-group">
            <label class="form-label">
                <input type="checkbox" name="startWithAudioMuted" class="form-checkbox"> Iniciar com áudio desativado
            </label>
        </div>
        <div class="form-group">
            <label class="form-label">
                <input type="checkbox" name="startWithVideoMuted" class="form-checkbox"> Iniciar com vídeo desativado
            </label>
        </div>
        <button type="submit" class="form-button">Avançar</button>
    </form>
</div>
