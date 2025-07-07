<style>
#velto-alert-overlay {
    position: fixed;
    inset: 0;
    background-color: rgba(0, 0, 0, 0.4);
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 9999;
}

#velto-alert-box {
    background: white;
    padding: 1.5rem;
    max-width: 400px;
    width: 90%;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    font-family: sans-serif;
}

#velto-alert-box h3 {
    margin-bottom: 0.5rem;
    font-size: 1.25rem;
}

#velto-alert-box p {
    margin-bottom: 1.5rem;
    font-size: 0.95rem;
    color: #444;
}

#velto-alert-box .buttons {
    display: flex;
    justify-content: center;
    gap: 1rem;
}

#velto-alert-box .buttons button {
    padding: 0.5rem 1.25rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

#velto-alert-confirm {
    background-color: #dc2626;
    color: white;
}

#velto-alert-cancel {
    background-color: #e5e7eb;
    color: #111827;
}
</style>

<div id="velto-alert-overlay">
    <div id="velto-alert-box">
        <h3 id="velto-alert-title">Confirmation</h3>
        <p id="velto-alert-message">Are you sure?</p>
        <div class="buttons">
            <button id="velto-alert-confirm">Yes</button>
            <button id="velto-alert-cancel">Cancel</button>
        </div>
    </div>
</div>

<script>
function veltoAlert(message = 'Are you sure?', title = 'Confirmation') {
    event.preventDefault();
    const form = event.target;

    document.getElementById('velto-alert-message').textContent = message;
    document.getElementById('velto-alert-title').textContent = title;

    const overlay = document.getElementById('velto-alert-overlay');
    overlay.style.display = 'flex';

    const confirmBtn = document.getElementById('velto-alert-confirm');
    const cancelBtn = document.getElementById('velto-alert-cancel');

    const cleanup = () => {
        overlay.style.display = 'none';
        confirmBtn.onclick = null;
        cancelBtn.onclick = null;
    };

    confirmBtn.onclick = () => {
        cleanup();
        form.submit();
    };

    cancelBtn.onclick = () => {
        cleanup();
    };

    return false;
}
</script>
