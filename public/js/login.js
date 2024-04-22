

async function loginAccount() {

    let password = document.querySelector('.passwordInput').value;
    let email = document.querySelector('.emailInput').value;

    if(email.length > 10 && email.length < 200){
        if(password.length > 7 && password.length < 50){
            let userInfos = {
                Password : password,
                Mail : email
            }
          
            let params = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json; charset=utf-8",
                },
                body: JSON.stringify(userInfos),
            };

            let request = await
            fetch("http://gestionsimplon/login", params)
            let data  = await request.json
            console.log(data);
                // .then((response) => console.log(response.status,response))
                // .then((data)=> {
                //     console.log(response);
                //     // window.location.href = HOME_URL.data
                //     // header.location = data;
                //     console.log(data);
                    
                // }).catch((error) => {
                //     console.log(error);
                // });
            //     if(){

            //     }else{
            //         let error = document.getElementById("error")
            // error.innerHTML = "<p>Email ou mot de passe incorrect</p>"
            // error.classList.remove('hidden');}
        } else {
            let error = document.getElementById("error")
            error.innerHTML = "<p>Longueur du mot de passe incorrect</p>"
            error.classList.remove('hidden');
            
        }
    } else {
         let error = document.getElementById("error")
            error.innerHTML = "<p>Le format du mail est incorrect</p>"
            error.classList.remove('hidden');
    }
}
 