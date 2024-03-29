<?= $this->extend("dashboard/base") ?>
<?= $this->section("content") ?>
<?php $user_data = session()->get('user_data'); ?>
<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><?= $title ?? altData() ?></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard"><i
                                            class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"><?= $title ?? altData() ?></a></li>
                            <li class="breadcrumb-item"><a href="#!">Liste d'activités</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-sm-6">
                            </div>
                            <?php if ($user_data['u_role'] === 'admin'): ?>
                                <div class="col-sm-6 text-right">
                                    <a type="button" href="<?= base_url() ?>/add-post"
                                       class="btn btn-success btn-sm btn-round has-ripple"><i
                                                class="feather icon-plus"></i>&nbsp;Activité</a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="table-responsive">
                            <table id="report-table" class="table mb-0">
                                <thead class="thead-light">
                                <tr>
                                    <th>Activités</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if ($posts) : ?>
                                    <?php foreach ($posts as $row) : ?>
                                        <?php if ($user_data['u_role'] === 'admin'): ?>
                                            <tr>
                                                <td class="align-middle">
                                                    <img src="<?= base_url(); ?>/public/assets/es_admin/images/posts/<?= $row->picture ?>"
                                                         alt="sect-img"
                                                         title="project-img"
                                                         class="rounded mr-3"
                                                         style="width: 64px;height: 48px;"
                                                    />
                                                    <p class="m-0 d-inline-block align-middle font-16">
                                                        <a href="#!"
                                                           class="text-body"><?= character_limiter($row->title, 8) ?></a>
                                                    </p>
                                                </td>
                                                <td class="text-justify">
                                                    <?= word_limiter($row->description, 8) ?>
                                                </td>
                                                <td class="align-middle">
                                                    <?= date('M d, Y', strtotime($row->updated_at)) ?>
                                                </td>

                                                <td class="table-action">
                                                    <a type="button"
                                                       href="<?= base_url() ?>/post-edit/<?= $row->postId ?>"
                                                       data-toggle="tooltip" data-placement="top" title="Modifier"
                                                       class="btn btn-icon btn-outline-success">
                                                        <i class="feather icon-edit"></i>
                                                    </a>

                                                    <a type="button"
                                                       href="<?= base_url() ?>/post-image/<?= $row->postId ?>"
                                                       data-toggle="tooltip" data-placement="top" title="Changer Image"
                                                       class="btn btn-icon btn-outline-info">
                                                        <i class="feather icon-image"></i>
                                                    </a>
                                                    <a href="<?= base_url() ?>/delete-project/<?= $row->postId ?>"
                                                       data-toggle="tooltip" data-placement="top" title="Supprimer"
                                                       class="btn btn-icon btn-outline-danger"
                                                       onclick="return confirm('Voulez-vous supprimmer cet élément ?')"
                                                    >
                                                        <i class="feather icon-trash-2"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>

</div>
<!-- [ Main Content ] end -->


<script type="text/javascript">
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

    // DataTable start
    $('#report-table').DataTable({
        "lengthMenu": [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, "All"]
        ]
    });
    // DataTable end
</script>

<?= $this->endSection() ?>
