    <script>
  function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  var userID = profile.getId();
  var userName= profile.getName();
  var userPicture = profile.getImageUrl();
  var userEmail = profile.getEmail();
  var userToken = googleUser.getAuthResponse().id_token;
  
  document.getElementById('msg').innerHTML = userName;
  
  if(userName !== ''){
      var dados = {
          userID.userID,
          userName.userName,
          userPicture,userPicture,
          userEmail,userEmail       
      };
      $.post('valida.php', dados, function(retorna){
         document.getElementById('msg').innerHTML = retorna; 
      });
      
  }else{
      var = "Usuário não encontrado!";
      document.getElementById('msg').innerHTML = msg;
  }
}
    </script>