(function () {
    let lastCheck = null;

    async function checkReload() {
        try {
            const res = await fetch('/.reload?_=' + Date.now());
            const text = await res.text();
            if (lastCheck && text !== lastCheck) {
                console.log("🔁 Reload triggered.");
                location.reload();
            }
            lastCheck = text;
        } catch (e) {
            console.warn("Watch reload check failed", e);
        }
    }

    setInterval(checkReload, 1000);
})();
