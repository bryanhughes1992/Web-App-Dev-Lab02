<style>
    @import url('https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Raleway&display=swap');


    * {
        box-sizing: border-box;
        font-family: 'Cutive Mono', monospace;
    }

    .hidden-msg {
        display: flex;
        flex-flow: column;
        color: #fff;
        text-align: center;
    }

    body  {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #222;
    }

    .master-container {
        display: flex;
        flex-flow: column nowrap;
        border-left: solid 1px #000;
        border-right: solid 1px #000;
        height: 100%;
        width: 75%;
        margin: 0 auto;
        background-color: #fff;
    }

    .title {
        text-transform: uppercase;
        text-align: center;
        text-decoration: underline;
    }

    form {
        display: flex;
        flex-flow: column;
        margin: auto auto;
        border: solid 1px #000;
        width: 50%;
        height: 50%;
    }

    .input {
        display: block;
        font-family: 'Cutive Mono', monospace;
    }

    .submit-btn {
        width: 20%;
        margin: auto;
        font-family: 'Cutive Mono', monospace;
        background-color: #000;
        color: #fff;
    }

    .input-container {
        margin: auto;
    }

    footer {
        border-top: solid 1px #000;
        width: 100%;
        height: 10%;
        margin: 0;
        text-align: center;
        font-family: 'Cutive Mono', monospace;
        text-transform: uppercase;
        background-color: #fff;
    }

    .footer-text {
        margin: 2em auto;
        font-weight: bold;
    }
</style>