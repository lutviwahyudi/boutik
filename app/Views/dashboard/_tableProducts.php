 <?php $no = 1; ?>
          <?php foreach ($clothes as $cl) : ?>
          <tr>
          <th scope="row"><?= $no++ ?></th>
            <td><img src="<?= base_url($cl['image']) ?>" alt="<?= $cl['name'] ?>" width="100"></td>
            <td><?= $cl['name'] ?></td>
            <td><?= $cl['price'] ?></td>
            <td><?= $cl['description'] ?></td>
            <td>
              <a href="<?= base_url('/edit-products/' . $cl['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
              
              <a href="#" 
                class="btn btn-danger btn-sm"
                data-bs-toggle="modal"
                data-bs-target="#deleteModal<?= $cl['id']; ?>">
                Delete
              </a>
            <div class="modal fade" id="deleteModal<?= $cl['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?= $cl['id']; ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel<?= $cl['id']; ?>">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <div class="modal-body">
                    Yakin mau hapus produk ini?
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                    <a href="<?= base_url('/delete-products/' . $cl['id']); ?>" class="btn btn-danger btn-sm">
                        Ya, Hapus
                    </a>
                  </div>
                </div>
              </div>
            </div>
            </td>
          </tr>
<?php endforeach; ?>