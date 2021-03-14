@extends('layouts.app')
@section('title','halaman contact')
@section('content')
    <x-modal warna="success" link="/home" modal="Contact">
        SELANJUTNYA
    </x-modal>
    
    <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>CONTACT</h2>
          </div>
        </div>

        <div class="row justify-content-center">
            
        <div class="col-lg-6">
            <form>
              <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button" class="btn btn-succes ">Send Message</button>
              </div>
            </form>
        </div>
            

          <div class="col-lg-4">
          <div class="card bg-success text-white text-center">
            <ul class="list-group">
              <li class="list-group-item "><h3>PEMROGRAMAN WEB LANJUT</h3></li>
              <li class="list-group-item "> ASEP ILHAM</li>
              <li class="list-group-item "> 5520119019</li>
              <li class="list-group-item "> IF A 19</li>
            </ul>
          </div>
          

          </div>
        </div>
      </div>
@stop