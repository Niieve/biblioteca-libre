<?php
/* @var $this SiteController */



$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'¿Quiénes somos?',
);


$this->menu=array(
	array('label'=>'List Categoria', 'url'=>array('index')),
	array('label'=>'Manage Categoria', 'url'=>array('admin')),
);
?>

<table width="100%" border="0">
  <tr valign="top">
    <td width="50">
      <h2>¿Quiénes somos?</h2><br>
      <p align="justify">Biblioteca Libre es un Proyecto educativo, auto gestionado por las y los estudiantes de Trabajo Social 
	    que nace de la  necesidad de autoeducarnos, retroalimentarnos y seguir construyendo 
	    escuela desde la participación y organización estudiantil.
        </p><br>
    </td>
    <td width="50">
    	<center>
        <img src="<?php echo Yii::app()->baseUrl.'/images/somos.jpg'?>" style="width: 310px; height: 170px">
        </center>
    </td>
  </tr>
  <tr>
      <td colspan="2">
      <h2>¿Por qué autoeducarnos y retroalimentarnos?</h2>
      </td>
      </tr>
  <tr valign="top">
      <td width="50">
      <p align="justify"><b>Autoeducarnos:</b> Porque concebimos la educación como liberadora, validando tanto los conocimientos técnicos, 
	  académicos y el conocimiento popular, como la diversidad temática, permitiendo el crecimiento personal de 
	  manera integral.
       </p><br>
    </td>
   
         <td width="50">
         <p align="justify"><b>Retroalimentarnos:</b>
		Porque es importante y necesario que en el proceso de adquirir conocimientos, además tengamos la posibilidad 
		de compartirlos con nuestros pares, así como quienes lo necesitan y/o lo quieran propiciando espacios que faciliten 
		este proceso dentro de la universidad.
		</p>
    </td>
  </tr>
<tr>
      <td colspan="2">
      <h2>Misión y Visión</h2>
      </td>
      </tr>
     <tr valign="top">
      <td width="50">
      <p align="justify"><b>Misión:</b> Gestionar los recursos de información de Trabajo Social para las futuras generaciones, 
      	como también  a la comunidad universitaria, facilitando el acceso a l@s mism@s y llevando a cabo su difusión, así como colaborar
      	en la génesis de conocimiento, a fin de contribuir a la consecución de los objetivos de la Universidad del Bio Bío.
       </p><br>
        </td>
         <td width="50">
         <p align="justify"><b>Visión:</b>
		Alcanzar la excelencia en la prestación del servicio, conforme a las expectativas de la carrera de Trabajo Social, 
		como también para la comunidad universitaria y constituirnos en un referente para nuestra comunidad en el ámbito de las 
		bibliotecas. 
		</p><br><br>
    </td>
  </tr>
</table>










