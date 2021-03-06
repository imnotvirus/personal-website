<div>
    <h2>Editar Contato</h2>

    <div>
        <form wire:submit.prevent="update" method="post">

                <div class="col-12">
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                </div>


            <div class="form-group">
                <label>Nome</label>

                <input type="text" wire:model="name"  class="form-control @error('phone') is-invalid @enderror">

                <div class="invalid-feedback">
                    @error('name')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div  class="form-group">
                <label>Email</label>

                <input type="email" wire:model="email"  class="form-control @error('phone') is-invalid @enderror">

                <div class="invalid-feedback">
                    @error('email')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label>Telefone</label>

                <input type="text" wire:model="phone"  class=" phone_with_ddd form-control @error('phone') is-invalid @enderror">

                <div class="invalid-feedback">
                    @error('phone')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-lg btn-success">
                Editar Contato
            </button>
        </form>

    </div>

</div>
