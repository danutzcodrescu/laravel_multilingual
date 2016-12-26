@include('admin.header', array('title' => 'Editare pagina', 'pages'=>$pages))

{!! Form::open(array('route' => ['admin-updatePage', $name[0]->page_id])) !!}
        <div>
             {!! Form::textarea('fr', $name[0]->body, array('placeholder' => 'Text in franceza', 'size'=>'50x10', 'id' => 'fr')) !!}
        </div>
        <div>
             {!! Form::textarea('eng', $name[1]->body, array('placeholder' => 'Text in engleza', 'size'=>'50x10', 'id' => 'eng')) !!}
        </div>
        <div>
            <button type="submit">Salveaza modificarile!</button>
        </div>
{!! Form::close() !!}   


<script src="//cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
<script>
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace( 'fr');
    CKEDITOR.replace( 'eng');
    CKEDITOR.config.contentsCss = '/css/app.min.css';
    CKEDITOR.config.allowedContent = true;
</script>

@include('admin.footer')