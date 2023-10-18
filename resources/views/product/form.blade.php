
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('codigo') }}</label>
    <div>
        {{ Form::text('codigo', $product->codigo, ['class' => 'form-control' .
        ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
        {!! $errors->first('codigo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>codigo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('articulo') }}</label>
    <div>
        {{ Form::text('articulo', $product->articulo, ['class' => 'form-control' .
        ($errors->has('articulo') ? ' is-invalid' : ''), 'placeholder' => 'Articulo']) }}
        {!! $errors->first('articulo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>articulo</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('lote') }}</label>
    <div>
        {{ Form::text('lote', $product->lote, ['class' => 'form-control' .
        ($errors->has('lote') ? ' is-invalid' : ''), 'placeholder' => 'Lote']) }}
        {!! $errors->first('lote', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>lote</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('marca') }}</label>
    <div>
        {{ Form::text('marca', $product->marca, ['class' => 'form-control' .
        ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
        {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>marca</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('stock total') }}</label>
    <div>
        {{ Form::text('stock total', $product->stock total, ['class' => 'form-control' .
        ($errors->has('stock total') ? ' is-invalid' : ''), 'placeholder' => 'Stock Total']) }}
        {!! $errors->first('stock total', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>stock total</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('talar') }}</label>
    <div>
        {{ Form::text('talar', $product->talar, ['class' => 'form-control' .
        ($errors->has('talar') ? ' is-invalid' : ''), 'placeholder' => 'Talar']) }}
        {!! $errors->first('talar', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>talar</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('outlet') }}</label>
    <div>
        {{ Form::text('outlet', $product->outlet, ['class' => 'form-control' .
        ($errors->has('outlet') ? ' is-invalid' : ''), 'placeholder' => 'Outlet']) }}
        {!! $errors->first('outlet', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>outlet</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('quilmes') }}</label>
    <div>
        {{ Form::text('quilmes', $product->quilmes, ['class' => 'form-control' .
        ($errors->has('quilmes') ? ' is-invalid' : ''), 'placeholder' => 'Quilmes']) }}
        {!! $errors->first('quilmes', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>quilmes</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('preparacion') }}</label>
    <div>
        {{ Form::text('preparacion', $product->preparacion, ['class' => 'form-control' .
        ($errors->has('preparacion') ? ' is-invalid' : ''), 'placeholder' => 'Preparacion']) }}
        {!! $errors->first('preparacion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>preparacion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ciclico') }}</label>
    <div>
        {{ Form::text('ciclico', $product->ciclico, ['class' => 'form-control' .
        ($errors->has('ciclico') ? ' is-invalid' : ''), 'placeholder' => 'Ciclico']) }}
        {!! $errors->first('ciclico', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>ciclico</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('marmoleria deposito') }}</label>
    <div>
        {{ Form::text('marmoleria deposito', $product->marmoleria deposito, ['class' => 'form-control' .
        ($errors->has('marmoleria deposito') ? ' is-invalid' : ''), 'placeholder' => 'Marmoleria Deposito']) }}
        {!! $errors->first('marmoleria deposito', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>marmoleria deposito</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('marmoleria fabrica') }}</label>
    <div>
        {{ Form::text('marmoleria fabrica', $product->marmoleria fabrica, ['class' => 'form-control' .
        ($errors->has('marmoleria fabrica') ? ' is-invalid' : ''), 'placeholder' => 'Marmoleria Fabrica']) }}
        {!! $errors->first('marmoleria fabrica', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>marmoleria fabrica</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('ext mepano') }}</label>
    <div>
        {{ Form::text('ext mepano', $product->ext mepano, ['class' => 'form-control' .
        ($errors->has('ext mepano') ? ' is-invalid' : ''), 'placeholder' => 'Ext Mepano']) }}
        {!! $errors->first('ext mepano', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>ext mepano</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('parq ind pilar') }}</label>
    <div>
        {{ Form::text('parq ind pilar', $product->parq ind pilar, ['class' => 'form-control' .
        ($errors->has('parq ind pilar') ? ' is-invalid' : ''), 'placeholder' => 'Parq Ind Pilar']) }}
        {!! $errors->first('parq ind pilar', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">product <b>parq ind pilar</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
