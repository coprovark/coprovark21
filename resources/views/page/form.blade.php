@extends('layouts.main')

@section('title', 'Page Title')


@section('content')
<form>
                            <div class="form-group">
                              <label for="exampleInputName">Fistname Lastname</label>
                              <input type="name" class="form-control" id="exampleInputName" placeholder="Name">
                            </div>
                            <div class="radio">
                                <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> เพศชาย
                                  </label>
                                  <label class="radio-inline">
                                    <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> เพศหญิง
                                  </label>
                                  
                              </div>
                              <div class="radio">
                              </div>
                            <div class="form-group">
                              <label for="exampleInputPhonenumber">Phonenumber</label>
                              <input type="phonenumber" class="form-control" id="exampleInputPhonenumber" placeholder="08x-xxxxxxx">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName">ที่อยู๋</label>
                               
                                
                                <textarea class="form-control" rows="3" placeholder="address"></textarea>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                              </div>

                              <div class="checkbox">
                                  <br>
                                <label for="exampleInputTrave">สถานที่ท่องเที่ยวที่ชอบ</label>
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox1" value="option1"> เที่ยวทะเล
                                  </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox2" value="option2"> เที่ยวภูเขา
                                  </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option3"> เที่ยวเอ็กตรีม
                                  </label>
                                  <label class="checkbox-inline">
                                    <input type="checkbox" id="inlineCheckbox3" value="option3"> ไม่ชอบเที่ยว
                                </label>
                                  </label>
                                <br>

                                </div>
                                <div class="text">
                               <label for="exampleInputadd">จังหวัด</label>
                                        <select class="form-control">
                                        <option>อุบลราชธานี</option>
                                        <option>นครพนม</option>
                                        <option>อุดรธานี</option>
                                        <option>ขอนแก่น</option>
                                      </select>
                                </label>
                                </div>
                              
                                <div class="text">
                                <label for="exampleInputadd">User@</label>
                                <input type="text" class="form-control" placeholder="User@xxxxx">
                                </label>
                                </div>


                            <div class="form-group">
                              <label for="exampleInputFile">File input</label>
                              <input type="file" id="exampleInputFile">
                              <p class="help-block">Example block-level help text here.</p>
                            </div>
                            
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Check me out
                              </label>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                          </form>
                          @endsection