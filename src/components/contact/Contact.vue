<template>
    <div id="contact">
        <h3>Vous voulez travailler avec moi, une idée de question ou vous avez une question ? Contactez moi !</h3>
        <section class="container-form-contact">
            <div class="contain-randb-2">
                <div>
                    <div class="rose"></div>
                    <div class="black"></div>
                </div>
            </div>
            <div class="container-gif">
                <img src="@/assets/img/test/mail.gif">
            </div>
            <form method="post" enctype="multipart/form-data">
                <h2>Par mail</h2>
                <div>
                    <label>
                        <input type="text" placeholder="Nom*" v-model="name">
                    </label>
                    <label>
                        <input type="text" placeholder="Nom de la société" v-model="nom_soc">
                    </label>
                </div>
                <div>
                    <label>
                        <input type="text" placeholder="Adresse email*" v-model="email">
                    </label>
                    <label>
                        <input type="text" placeholder="Objet du mail*" v-model="objet">
                    </label>
                </div>
                <label>
                    <textarea type="text" placeholder="Message*" v-model="message"></textarea>
                </label>
                <button class="cta send-mail" type="submit" placeholder="envoie" v-on:click.prevent="envoie">Envoyer</button>
            </form>
        </section>
    </div>
</template>

<script>
    import axios from 'axios'
    export default{
        data(){
            return{
                name : '',
                nom_soc : '',
                obj : '',
                email : '',
                message : ''
            }
        },
        methods: {
            envoie: function(){
                axios.post('http://louison-hipeau.fr/index.php',
                    {
                        name: this.name,
                        nom_soc: this.name,
                        obj : this.obj,
                        email : this.email,
                        message : this.message
                    }
                )
                    .then(function (response) {
                        // eslint-disable-next-line no-console
                        console.log(response);
                    })
            }
            }
    }
</script>
<style>
    body{
        overflow-x: hidden;
    }
    #contact{
        min-height: 80vh;
    }
    #contact h3 {
        width: 90%;
        display: block;
        margin: 5vh auto 0 auto;
    }
    .container-form-contact{
        display: flex;
        margin: auto;
        width: 90%;

    }
    .container-form-contact{
        position: relative;
    }
    #contact form{
        position: relative;
        margin: auto 0 auto 0;
        height: 30vh;
        width: 40%;
    }
    #contact form  div{
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-bottom: 3%;
    }
    #contact form label{
        width: 45%;
    }
    #contact form input{
        padding: 5%;
        width: 90%;
        border-radius: 0.5em;
        background: none;
        border: 1px solid #d6d1d3;
    }
    #contact form textarea{
        width: 94%;
        border-radius: 0.5em;
        background: none;
        border: 1px solid #d6d1d3;
        padding: 3%;
        height: 15vh;
        resize: none;
    }
    #contact form textarea::placeholder {

    }
    #contact .container-gif{
        width: 50%;
    }
    .cta{
        padding: 0.75vw 2vw 0.75vw 2vw;
        color: #a30841;
        border-radius: 5vw;
        margin-top: 5vh;
        font-size: 1vw;
        opacity: 0.8;
        transition: 0.6s;
        cursor: pointer;
        border: 2px solid #a30841 ;
        background-color: #FFFFFF;
    }
    .cta:hover{
        opacity: 1;
        background-color: #a30841;
        color: #FFFFFF;
    }
    .send-mail{
        right: 0;
        position: absolute;
    }



</style>