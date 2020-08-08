const APIController = (function() {

    const clientId = '';
    const clientSecret = '';

    // Private methods
    const _getToken = async () => {

        const resut = await fetch('https://accounts.spotify.com/api/token', {
            method: 'POST',
            headers: {
                'Content-Type' : 'application/x-www-form-urlencoded',
                'Authorization' : 'Basic ' + btoa(clientId + ':' + clientSecret)
            },
            body: 'grant_type=client_credentials'
        });

        const data = await resut.json();
        return data.access_token;
    }

    const getFavorite = async (token) => {

    }

    
})();