<html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA_Compatible" content="IE=edge">
        <meta name="viewport" content="widt=device-width", initial-scale=1.0> 
    </head>
<body>
          <h1>From Tambah Data Profile</h1>
         <form action="<?= base_url('profile/action_tambah_data') ?>" method="post">
         <table>
             <tr>
                 <td>Parameter 1</td>
                 <td>:</td>
                 <td><input type="text" name="par1"></td>
             </tr>    
             <tr>
                 <td>Parameter 2</td>
                 <td>:</td>
                 <td><input type="text" name="par2"></td>
             </tr>    
             <tr>
                 <td>Parameter 3</td>
                 <td>:</td>
                 <td><input type="text" name="par3"></td>
             </tr>   
             <tr>
                   <td colspan="3">
                       <button type="submit"> Simpan </button>
                   </td> 
             </tr>  
          </table>
          </form>     
</body>  


               Bright Vachirawit Chivaaree