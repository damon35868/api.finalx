<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('goods')->insert([
            [
                'name' => "ROG-MATRIX-RTX2080TI-P11G-GAMING",
                'desc' => "超越创新和性能界限的产品，才称得上「骇客」之名。 ROG MATRIX GEFORCE RTX™ 2080 TI 就是一款拥有此殊荣的显卡。全新一代「骇客」使用的每颗显卡GPU都经过严格分级和挑选，并且融入了独特的一体式水冷闭回路散热系统 — Infinity Loop 循环。这种具有划时代意义的散热方式将提供更出色的 Turing™ 显卡的性能体验。",
                'price' => 3299,
                'status' =>  1,
                'created_at' => date("Y-m-d h:i:s"),
                'updated_at' => date("Y-m-d h:i:s")
            ],
            [
                'name' => "ROG CROSSHAIR X670E GENE",
                'desc' => "AMD X670 MATX 主板配备 16+2 供电模组, DDR5, 3个 M.2, USB 3.2 Gen 2x2 前置接口支持快充4+, 双 USB4® 接口, 支持 PCIe® 5.0, 板载 Wi-Fi 6E 和 AURA SYNC 神光同步灯效",
                'price' => 2999,
                'status' =>  1,
                'created_at' => date("Y-m-d h:i:s"),
                'updated_at' => date("Y-m-d h:i:s")
            ],
            [
                'name' => "ROG STRIX B450-I GAMING",
                'desc' => "AMD AM4 B450 ITX 电竞主板支持 DDR4 3600MHz, SATA 6Gbps, 802.11ac Wi-Fi, HDMI 2.0, 双 M.2, USB 3.1 Gen 2, M.2 散热片和 Aura Sync RGB LED 神光同步灯效",
                'price' => 1299,
                'status' =>  1,
                'created_at' => date("Y-m-d h:i:s"),
                'updated_at' => date("Y-m-d h:i:s")
            ],
        ]);
    }
}
