@extends('probandos')

@section('content')
<style type="text/css" >
    


.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
.legend{
    color: #36A0FF;
}
h2,h1,span
{
    color: #36A0FF;

}
.title{
  font-size: 25px;  
}
 .title-description{
   font-size: 0px;   
 } 
 .gris{
    background:#8c8c8c; 
    color:white;
}  
</style>
   
               
 <article class="content forms-page">         
                   
        <div class="title-block">
            <span class=""><i class="fa fa-archive bigicon icon_nav" > Notificaciones </i></span>
                <p class="title-description"> Notificaciones del SIALCSV </p>
        </div>                 
               
              
 {!!Html::style('assets/plugins/bootstrap/bootstrap.css')!!}  
 {!!Html::style('assets/font-awesome/css/font-awesome.css')!!}  
 {!!Html::style('assets/plugins/pace/pace-theme-big-counter.css')!!}  
 {!!Html::style('assets/css/style.css')!!}  
 {!!Html::style('assets/css/main-style.css')!!}

<div class="panel panel-primary">
 <div class="panel-heading">
                <h1 class="panel-title">Formulario de Notificaciones</h1>
            </div>
                <h2 align="center">Notificaciones</h2>
            <section class="section"> 
                <div>
                    <div class="card card-block sameheight-item">
          
            <div class="row">
                 <!--page header-->
                <div class="col-lg-12">
                    <h1 class="page-header">Paneles de Notificaciones</h1>
                </div>
                 <!--end page header-->
            </div>
            <br>
            <br>
            <div class="row">
                 
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Primary Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Success Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
                  <!--End Default Pannel, Primary Panel And Success Panel   -->
                 <div class="col-lg-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Danger Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div> 
            </div>
            <div class="row">
                <!--Info Pannel, Warning Panel And Danger Panel   -->
                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Info Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            Warning Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            Danger Panel
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div>
                <!--End Info Pannel, Warning Panel And Danger Panel   -->
            </div>
            </div>
</div>
</div>
</section>
</article>


@endsection