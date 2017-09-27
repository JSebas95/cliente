@extends('layouts.admin')
@section('contenido')
	<div id="productos">
        <h1 class="text-center text-primary"><strong>Nuestros Productos</strong></h1>
        <p align="center">Busca tu Vehiculo y encuentra los componentes mas adecuados en todas las marcas.</p>
 
        <div>
            
            <div class="row">

                <div class="col-md-6 col-md-offset-1" id="colum1">
                    <p class="text-right textfiltro">Tipo de Vehiculo:</p>
                    <p class="text-right textfiltro">Marca de Vehículo:</p>
                    <p class="text-right textfiltro">Modelo: </p>
                    <p class="text-right textfiltro">Cilindraje: </p>
                </div>
                <div class="col-md-5">
                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="ptipo_vehiculo" class="form-control selectpicker" onclick="Buscar()" id="ptipo_vehiculo" data-live-search="true">
                               @foreach($tipov as $tip)
                                <option value="{{$tip->idtv}}">{{$tip->nombre}}</option>
                                @endforeach 
                                                 
                            </select>
                        </div>
                    </div>
     

                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="pmarca_vehiculo" class="form-control selectpicker" onclick="Buscarmodelo()" id="pmarca_vehiculo" data-live-search="true">
                                
                            </select>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="pmodelo" class="form-control selectpicker" id="pmodelo" onclick="Cilindraje()" data-live-search="true">
                                 
                            </select>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="form-group">
                            <select name="pcilindraje" class="form-control selectpicker" id="pcilindraje" data-live-search="true">
                                   
                            </select>
                        </div>
                             
                    
                    </div>
                                        <div class="col-md-7">
                        <div class="form-group">
                         <a data-target="#modal-delete" data-toggle="modal"><button id="botonfinal" name="botonfinal" class="btn btn-primary">Ver sugeridos</button> </a>
                            @include('inicio.distrivan.modal')
                            </div>
                    </div>
                </div>
                </div>

            </div>

        </div>
 
                       







@push('scripts') 

<script>

$("#botonfinal").hide();

function Buscar(){
    var tipo=document.getElementById("ptipo_vehiculo").value;

    var marca=document.getElementById("pmarca_vehiculo");

    if(tipo==1){
            marca.options[0] = new Option("Tipo de Automovil");
            marca.options[1] = new Option("Renoult");
            marca.options[2] = new Option("Chevrolet");
            marca.options[3] = new Option("BMW");
            marca.options[4] = new Option("Mazda");
            
        
    }
    if(tipo==2){
            marca.options[0] = new Option("Tipo de Bus");
            marca.options[1] = new Option("Bus1");
            marca.options[2] = new Option("Bus2");
            marca.options[3] = new Option("Bus3");
            marca.options[4] = new Option("Bus4");
            
        
    }
    if(tipo==4){
            marca.options[0] = new Option("Tipo de Motocicleta");
            marca.options[1] = new Option("Suzuki");
            marca.options[2] = new Option("Yamaha");
            marca.options[3] = new Option("Honda");
            marca.options[4] = new Option("Kawasaki");
            
        
    }

}

function Buscarmodelo(){
    var tipo=document.getElementById("pmarca_vehiculo").value;

    var modelo=document.getElementById("pmodelo");

    if(tipo=="Renoult"){
            modelo.options[0] = new Option("Tipo de Renoult");
            modelo.options[1] = new Option("Renoult1");
            modelo.options[2] = new Option("Renoult2"); 
            modelo.options[3] = new Option("Renoult3");        
        
    }
    if(tipo=="Chevrolet"){
            modelo.options[0] = new Option("Tipo de Chevrolet");
            modelo.options[1] = new Option("Chevrolet1");
            modelo.options[2] = new Option("Chevrolet2");
            modelo.options[3] = new Option("Chevrolet3");

            
        
    }
    if(tipo=="BMW"){
            modelo.options[0] = new Option("Tipo de BMW");
            modelo.options[1] = new Option("BMW1");
            modelo.options[2] = new Option("BMW2");
            modelo.options[3] = new Option("BMW3");

            
        
    }
    if(tipo=="Mazda"){
            modelo.options[0] = new Option("Tipo de Mazda");
            modelo.options[1] = new Option("Mazda1");
            modelo.options[2] = new Option("Mazda2");
            modelo.options[3] = new Option("Mazda3");

            
        
    }
    if(tipo=="Bus1"){
            modelo.options[0] = new Option("Tipo de Bus1");
            modelo.options[1] = new Option("Bus1");
            modelo.options[2] = new Option("Bus2");
            modelo.options[3] = new Option("Bus3");

            
        
    }
    if(tipo=="Bus2"){
            modelo.options[0] = new Option("Tipo de Bus2");
            modelo.options[1] = new Option("Bus1");
            modelo.options[2] = new Option("Bus2");
            modelo.options[3] = new Option("Bus3");

            
        
    }
    if(tipo=="Bus3"){
            modelo.options[0] = new Option("Tipo de Bus3");
            modelo.options[1] = new Option("Bus1");
            modelo.options[2] = new Option("Bus2");
            modelo.options[3] = new Option("Bus3");

            
        
    }
    if(tipo=="Bus4"){
            modelo.options[0] = new Option("Tipo de Bus4");
            modelo.options[1] = new Option("Bus1");
            modelo.options[2] = new Option("Bus2");
            modelo.options[3] = new Option("Bus3");

            
        
    }
    if(tipo=="Suzuki"){
            modelo.options[0] = new Option("Tipo de Suzuki");
            modelo.options[1] = new Option("Suzuki1");
            modelo.options[2] = new Option("Suzuki2");
            modelo.options[3] = new Option("Suzuki3");

            
        
    }
    if(tipo=="Yamaha"){
            modelo.options[0] = new Option("Tipo de Yamaha");
            modelo.options[1] = new Option("Yamaha1");
            modelo.options[2] = new Option("Yamaha2");
            modelo.options[3] = new Option("Yamaha3");

            
        
    }
    if(tipo=="Honda"){
            modelo.options[0] = new Option("Tipo de Honda");
            modelo.options[1] = new Option("Honda1");
            modelo.options[2] = new Option("Honda2");
            modelo.options[3] = new Option("Honda3");

            
        
    }
    if(tipo=="Kawasaki"){
            modelo.options[0] = new Option("Tipo de Kawasaki");
            modelo.options[1] = new Option("Kawasaki1");
            modelo.options[2] = new Option("Kawasaki2");
            modelo.options[3] = new Option("Kawasaki3");
            
        
    }

    }

    function Cilindraje(){
    var tipo=document.getElementById("pmarca_vehiculo").value;

    var cilindraje=document.getElementById("pcilindraje");

    if(tipo=="Renoult"){
            
            cilindraje.options[0] = new Option("Cilidraje Renoult");
            cilindraje.options[1] = new Option("Cilidraje Renoult");      
        
    }
    if(tipo=="Chevrolet"){
            
            cilindraje.options[0] = new Option("Cilidraje Chevrolet");
            cilindraje.options[1] = new Option("Cilidraje Renoult");
        
    }
    if(tipo=="BMW"){
            
            cilindraje.options[0] = new Option("Cilidraje BMW");  
            cilindraje.options[1] = new Option("Cilidraje Renoult");          
        
    }
    if(tipo=="Mazda"){
            
            cilindraje.options[0] = new Option("Cilidraje Mazda");
            cilindraje.options[1] = new Option("Cilidraje Renoult");
           
        
    }
    if(tipo=="Bus1"){
            
            cilindraje.options[0] = new Option("Cilidraje Bus");
            cilindraje.options[1] = new Option("Cilidraje Renoult");
           
        
    }
    if(tipo=="Suzuki"){
            
            cilindraje.options[0] = new Option("Cilidraje Suzuki");
            cilindraje.options[1] = new Option("Cilidraje Renoult");
          
        
    }
    if(tipo=="Yamaha"){
            
            cilindraje.options[0] = new Option("Cilidraje Yamaha");
            cilindraje.options[1] = new Option("Cilidraje Renoult");        
    }
    if(tipo=="Honda"){
            
            cilindraje.options[0] = new Option("Cilidraje Honda");
            cilindraje.options[1] = new Option("Cilidraje Renoult");
            
}
    if(tipo=="Kawasaki"){
            
            cilindraje.options[0] = new Option("Cilidraje Kawasaki");
            cilindraje.options[1] = new Option("Cilidraje Renoult");
        }


    }
$("#ptipo_vehiculo").val("Tipo Vehículo");

$("#pmarca_vehiculo").hide();
$("#pmodelo").hide();
$("#pcilindraje").hide();


$("#ptipo_vehiculo").change(mostrarvehiculo);
$("#pmarca_vehiculo").change(mostrarmodelo);
$("#pmodelo").change(mostrarcilindraje);
$("#pcilindraje").change(mostrarbotonfinal);

function mostrarbotonfinal(){
    $("#botonfinal").show();

    var vechi= document.getElementById("pmarca_vehiculo").value;
    document.getElementById("Vehiculo").innerHTML = vechi;


}

function mostrarvehiculo(){
    $("#pmarca_vehiculo").val("Marca del Vehículo");
    $("#pmarca_vehiculo").show();
    
}

function mostrarmodelo(){
    $("#pmodelo").val("Modelo del Vehículo");
    $("#pmodelo").show();
    
}

function mostrarcilindraje(){
    $("#pcilindraje").val("Cilindraje del Vehículo");
    $("#pcilindraje").show();
    
}




</script>

@endpush  
@endsection 