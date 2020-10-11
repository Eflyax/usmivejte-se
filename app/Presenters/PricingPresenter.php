<?php

declare(strict_types=1);

namespace App\Presenters;

final class PricingPresenter extends BasePresenter
{

    public function actionDefault()
    {
        $priceList = [
            "komplexVysetreni" => $this->formatPrice(1800),
            "vizualizacePlaku" => $this->formatPrice(600),
            "hygienickaInstruktaz" => $this->formatPrice(480),
            "odstraneniKamene" => $this->formatPrice(1200),
            "airFlow" => $this->formatPrice(1920) . ' ' . $this->translator->translate('az') . ' ' . $this->formatPrice(4500),
            "rajskyPlyn" => $this->formatPrice(500),
            "rentgenMaly" => $this->formatPrice(200),
            "rentgenVelky" => $this->formatPrice(500),
            "anestezie" => $this->formatPrice(290),
            "bilaVypln" => $this->formatPrice(2200) . ' ' . $this->translator->translate('az') . ' ' .  $this->formatPrice(9000),
            "calxyd" => $this->formatPrice(190),
            "biner" => $this->formatPrice(190),
            "devipasta" => $this->formatPrice(960),
            "calxydRozsireny" => $this->formatPrice(450),
            "zaplneniKanalku1" => $this->formatPrice(1090),
            "zaplneniKanalku2" => $this->formatPrice(1990),
            "zaplneniKanalku3" => $this->formatPrice(2990),
            "zaplneniKanalku4" => $this->formatPrice(3990),
            "kompozitniCepy" => $this->formatPrice(4500),
            "beyondPlus" => $this->formatPrice(15000),
            "zubniSperk" => $this->formatPrice(850),
            "extrakceZubu" => $this->formatPrice(1500),
            "extrakceZubuChirurg" => $this->formatPrice(3000),
            "augmentace" => $this->formatPrice(4000),
            "kyretaz" => $this->formatPrice(3000),
            "zirkonovaKorunka" => $this->formatPrice(9000),
            "zirkonovyMeziclen" => $this->formatPrice(5500),
            "zavedeniBiomet" => $this->formatPrice(35000),
            "abutmanBiomet" => $this->formatPrice(7000),
            "osetreniMimoHodiny" => $this->formatPrice(4000) . ' + ' . $this->translator->translate('vykon'),

            "soloKartacek" => $this->formatPrice(90),
            "trojKartacek" => $this->formatPrice(250),
            "dvojKartacek" => $this->formatPrice(240),
            "jednosvazek" => $this->formatPrice(90),
            "detskyKartacek" => $this->formatPrice(90),
            "cestovniKartacek" => $this->formatPrice(220),
            "mezizubniKartacky" =>  $this->formatPrice(160),
            "superFloss" => $this->formatPrice(150),
            "plaqueAgent" => $this->formatPrice(300),
            "curasept" => $this->formatPrice(110),
            "odolKrtecek" => $this->formatPrice(50),

            "pastePlus" => $this->formatPrice(565),
            "odolKrtecek" => $this->formatPrice(40),
            "presidentPasta" => $this->formatPrice(70),
            "opalescence" => $this->formatPrice(300),
            "curaseptGel" => $this->formatPrice(210),
            "curaseptGelPasta" => $this->formatPrice(210),

            "detskydudlik" => $this->formatPrice(500),
            "detskeKousatko" => $this->formatPrice(350),
            "curasafe" => $this->formatPrice(400),
            "krabickaNaZub" => $this->formatPrice(50),
        ];

        $this->template->priceList = $priceList;
    }
}
