@extends('layouts.main')
 
 @section('title', 'Page Title')
 
 @section('content')
 <form action="/form_register_save" method="post">
                                       

                         <div class="row">
                             <div class="col-md-4">
                                 <div class="form-group">
                                    <label for="Tell">ID</label>
                                    <input type="number" class="form-control" name="ID" placeholder="">
                                   <label for="Tell">รหัสนักศึกษา</label>
                                   <input type="int" class="form-control" name="sid" placeholder="">
                                 </div>
                            

                                <div class="form-group">
                                    <label for="Sirname" >คำนำหน้า</label>
                                   <select name="titleName" class="form-control" placeholder="-คำนำหน้า-">
                                            <option value="0">-คำนำหน้าชื่อ</option>
                                            <option value="1">นาย</option>
                                            <option value="2">นาง</option>
                                            <option value="3">นางสาว</option>
                                        </select>
                                    </div>
                             </div>
                         </div>
 
                      
                         <div class="row">
                            <div class="col-md-6">
                            <div class="col-md-8">
                                 <div class="form-group">
                                        <label for="User">Username</label>
                                        <input type="text" class="form-control" name="USER" placeholder="Username">
                                    <label >ชื่อ-นามสกุล</label>
                                    <input type="char" class="form-control" name="fullName" placeholder="ชื่อนามสกุล">
                                 </div>
                             </div>
                         </div>
                        

                       
                        <div class="form-group">
                              <label >เพศ</label>
                              <br>
                              <P>
                                <input type="radio" name="gender" value="1"><font size="" color="">ชาย</font>
                                <input type="radio" name="gender" value="2"><font size="" color="">หญิง</font>
                                <input type="radio" name="gender" value="3"><font size="" color="">ทอม</font>
                                 <input type="radio" name="gender" value="3"><font size="" color="">กระเทย</font>
                                 </p>
                                 </br>
                            </div>
                        
                       
                       <div class="row">
                            <div class="col-md-3">
                            <label>อายุ</label>
                                <div class="form-group">
                                        <label>วัน เดือน ปีเกิด</label>
                                        <input type="date" class="form-control" name="birthday" placeholder=""><br>
                                        
                                    </div>
                                </div>
                            </div>

                            
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                        <label for="pass">Password</label>
                                        <input type="Password" class="form-control" name="PASSWORD" placeholder="Password">
                                    <label for="pass">สังกัดคณะ</label>
                                    <input class="form-control" list="faculty" name="facultyID" placeholder="ค้นหาคณะ">
                                        <datalist id="faculty">
                                        <option value="11">คณะวิทยาศาสตร์</option>
                                        <option value="22">คณะเกษตรศาสตร์</option>
                                       <option value="33">คณะเทคโนโลยีอุตสาหกรรม</option>
                                        <option value="44">คณะวิทยาการคอมพิวเตอร์</option>
                                         <option value="55">คณะครุศาสตร์</option>
                                        <option value="66">คณะมนุษยศาสตร์และสังคมศาสตร์ </option>
                                        <option value="77">คณะบริหารธุรกิจและการจัดการ </option>
                                        <option value="88">คณะนิติศาสตร์ </option>
                                        <option value="99">คณะพยาบาลศาสตร์</option>
                                        <option value="10">คณะแพทย์แผนไทยและแพทย์ทางเลือก</option>
                                        <option value="20">คณะสาธารณสุขศาสตร์</option>
                                        
                                        </datalist>
                                 </div>

                               
                                <div class="form-group">
                                    <label for="major" >สาขา</label>
                                    <select name="majorID" class="form-control" placeholder="-สาขาวิชา-">
                                            <option value="01">COM</option>
                                           <option value="02">THAI</option>
                                            <option value="22">SINCE</option>
                                             <option value="33">ENGLISH</option>
                                             <option value="44">MUSIC</option>
                                            <option value="55">DOCTER</option>
                                             <option value="66">CHAINA</option>
                                        </select>
                                    </div>
                             </div>
                         </div>
 
                       

                           
                            <div class="form-group">
                                <label for="Address">ที่อยู่</label><br>
                                <textarea name="address" class="form-control" rows="8"  cols="100" maxlength="" placeholder="Adress"> </textarea>
                            </div>

                       
                        <div class="form-group">
                                <label for="Tell">โทรศัพท์</label>
                                <input type="char" class="form-control" name="mobile" placeholder="xx-xxxxxxxx">
                              </div>
                    
                        <div class="form-group">
                                <p>
                              <label >อาหารที่ชอบ</label>&nbsp;&nbsp;&nbsp;
                                <input type="checkbox" name="food1" value="1"><font size="" color="">อาหารไทย</font>&nbsp;&nbsp;
                               <input type="checkbox" name="food3" value="3"><font size="" color="">อาหารญี่ปุ่น</font>&nbsp;&nbsp;
                                <input type="checkbox" name="food4" value="4"><font size="" color="">อาหารฝรั่ง</font>&nbsp;&nbsp;
                                </p>
                        </div>
                        <hr><br>

                         <div class="row">
                            <div class="col-md-3">
                            <select name="STATUS" class="form-control" placeholder="-Status-">
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                    <option value="3">Vip</option>
                                    
                                </select>
                    <div class="col-md-6">                        
                                    <div class="form-group">
                                            <label for="User">Username</label>
                                            <input type="char" class="form-control" name="username" placeholder="Username">
                                   </div>

                               
                                
                                        <div class="form-group">
                                           <label for="pass">Password</label>
                                            <input type="Password" class="form-control" name="password" placeholder="Password">
                                        </div>
                             </div>
                        </div><br>
                        </div>
                        <br>
 
                        
                             <button type="submit" class="btn btn-primary">Submit</button>
                             <button type="reset" class="btn btn-warning">Reset</button>
                             <br>
                             <br><hr>
                           </form>
 
 @endsection