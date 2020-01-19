$(function(){
    let login=document.getElementById('login');
    login.addEventListener('click', function(){
      let popUp=$('.poplog');
      popUp.fadeToggle();
    });

    let close= document.getElementById('close');
    close.addEventListener('click',()=>{
        let popUp=$('.poplog');
        popUp.fadeToggle();
    })


    let register=document.getElementById('register');
    register.addEventListener('click', function(){
      let popUp=$('.popReg');
      popUp.fadeToggle();
    });

    let closeR= document.getElementById('closeReg');
    closeR.addEventListener('click',()=>{
        let popReg=$('.popReg');
        popReg.fadeToggle();
    })

    let land=document.getElementById('lands');
    let owners=document.getElementById('owners');
    let ngoma=document.getElementById('ngomal');
    land.addEventListener('click',()=>{
      window.location="/lands";
    })
    owners.addEventListener('click',()=>{
      window.location="/owners";
    })
    ngoma.addEventListener('click',()=>{
      window.location="/";
    })

})
