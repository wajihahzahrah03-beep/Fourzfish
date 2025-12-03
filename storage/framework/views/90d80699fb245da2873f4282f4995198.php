<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Struk <?php echo e($transaksi->kode); ?></title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 11px;
            color: #111827;
        }
        .wrapper {
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            border-bottom: 1px solid #e5e7eb;
            padding-bottom: 6px;
            margin-bottom: 8px;
        }
        .brand {
            font-size: 16px;
            font-weight: 700;
        }
        .subtitle {
            font-size: 10px;
            color: #6b7280;
        }
        .info-table {
            width: 100%;
            margin-bottom: 8px;
        }
        .info-table td {
            vertical-align: top;
            font-size: 10px;
            padding: 2px 0;
        }
        .label {
            color: #6b7280;
            width: 90px;
        }
        table.items {
            width: 100%;
            border-collapse: collapse;
            margin-top: 6px;
        }
        table.items th,
        table.items td {
            border: 1px solid #e5e7eb;
            padding: 4px;
            font-size: 10px;
        }
        table.items th {
            background: #f3f4f6;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .footer {
            margin-top: 10px;
            border-top: 1px dashed #e5e7eb;
            padding-top: 6px;
            font-size: 9px;
            text-align: center;
            color: #6b7280;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <div class="brand">FourzFish</div>
        <div class="subtitle">
            Toko Ikan Hias Online<br>
            Struk Transaksi · <?php echo e($transaksi->kode); ?> · <?php echo e($transaksi->created_at->format('d M Y H:i')); ?>

        </div>
    </div>

    <table class="info-table">
        <tr>
            <td class="label">Pelanggan</td>
            <td>: <?php echo e($transaksi->nama_pelanggan); ?></td>
        </tr>
        <tr>
            <td class="label">No. HP</td>
            <td>: <?php echo e($transaksi->no_hp ?: '-'); ?></td>
        </tr>
        <tr>
            <td class="label">Alamat</td>
            <td>: <?php echo e($transaksi->alamat ?: '-'); ?></td>
        </tr>
    </table>

    <table class="items">
        <thead>
            <tr>
                <th style="width: 5%;">#</th>
                <th>Ikan</th>
                <th style="width: 20%;" class="text-right">Harga</th>
                <th style="width: 10%;" class="text-center">Qty</th>
                <th style="width: 20%;" class="text-right">Subtotal</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $transaksi->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="text-center"><?php echo e($index + 1); ?></td>
                <td><?php echo e($item->nama_ikan); ?></td>
                <td class="text-right">Rp <?php echo e(number_format($item->harga, 0, ',', '.')); ?></td>
                <td class="text-center"><?php echo e($item->qty); ?></td>
                <td class="text-right">Rp <?php echo e(number_format($item->subtotal, 0, ',', '.')); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td colspan="4" class="text-right"><strong>Total</strong></td>
            <td class="text-right"><strong>Rp <?php echo e(number_format($transaksi->total, 0, ',', '.')); ?></strong></td>
        </tr>
        </tbody>
    </table>

    <div class="footer">
        Terima kasih telah berbelanja di FourzFish. 🐠<br>
        Simpan struk ini sebagai bukti transaksi yang sah.
    </div>
</div>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\fourzfish\resources\views/transaksi/struk_pdf.blade.php ENDPATH**/ ?>