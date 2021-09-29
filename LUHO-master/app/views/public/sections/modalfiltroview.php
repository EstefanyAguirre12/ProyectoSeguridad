<!-- Modal -->
<!-- Full Height Modal Right -->
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-full-height modal-right" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
			</div>
			<?php
			    foreach($marca as $producto){
                    print("
                    <div class='list-group'>
                        <a href='?id=$producto[IdMarca]' class='list-group-item active waves-effect'>$producto[Marca]   </a>
                    ");
                }
                
            ?>
            			
                    <a href="#" class="list-group-item list-group-item-action waves-effect">Dapibus ac facilisis in</a>
                    <a href="#" class="list-group-item list-group-item-action waves-effect">Morbi leo risus</a>
                    <a href="#" class="list-group-item list-group-item-action waves-effect">Porta ac consectetur ac</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>