<label for="Nombre_Real"> Nombre Real </label>
<input type="text" name="Nombre_Real" value= "{{ isset($superheroes->Nombre_Real) ?$superheroes->Nombre_Real:'' }}" id="Nombre_Real">
<br>
<label for="Nombre_De_Superheroe"> Nombre de superheroe </label>
<input type="text" name="Nombre_De_Superheroe" value= "{{ isset($superheroes->Nombre_De_Superheroe) ?$superheroes->Nombre_De_Superheroes:'' }}" id="Nombre_De_Superheroe">
<br>
<label for="Foto"> Foto </label>
@if(isset( $superheroes->Foto ))

<img src="{{ asset('storage').'/'.$superheroes->Foto }}" width="100" alt="">
@endif

<input type="file" name="Foto" id="Foto"> 
<br>
<label for="Informacion_Adicional"> Información adicional </label>
<input type="text" name="Informacion_Adicional" value= "{{ isset($superheroes->Informacion_Adicional) ?$superheroes->Informacion_Adicional:'' }}" id="Informacion_Adicional">
<br>
<input type="submit" value="Guardar datos">

<a href=" {{ url('superheroes/') }}">Regresar </a>
<br>