<main role="main" class="container">
       <div class="row">
         <div class="col">
             <?php foreach ($detailKat as $key) { ?> 
             <div class="form-group">
                     <label for="nama">nama</label>
                     <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="<?php echo $key['nama'] ?>">
             </div>
             <div class="form-group">
                     <label for="kodepos">kodepos</label>
                     <input type="kodepos" class="form-control" id="kodepos" name="kodepos" placeholder="kodepos">
             </div>
             <div class="form-group">
                     <label for="email">email</label>
                     <input type="text" class="form-control" id="email" name="email" placeholder="email">
             </div>
             <div class="form-group">
                     <label for="username">username</label>
                     <input type="text" class="form-control" id="username" name="username" placeholder="username">
             </div>
             <div class="form-group">
                     <label for="password">password</label>
                     <input type="password" class="form-control" id="password" name="password" placeholder="password">
             </div>
             <div class="form-group">
                     <label for="level">level</label>
                     <input type="text" class="form-control" id="level" name="level" placeholder="level 0/1/2">
             </div>
             <input type="submit" name="add" value="Tambah" class="btn btn-success">
                     </form>
             </div>
             <?php } ?>
       </div>
     </main> 