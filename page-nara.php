<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Unico Personal Training</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css" />
    <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/din-2014" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-[#fff7f7] flex justify-end">
    <img
      class="absolute top-[60px] left-[40px] [@media(max-width:1200px)]:hidden"
      alt="Image"
      src= "<?php echo get_template_directory_uri();?>/assets/large_logo.png"
    />
    <div
      class="w-[1000px] h-screen bg-[#FF6B6B] py-[50px] px-[53px] flex justify-start gap-[53px] [@media(max-width:530px)]:py-0 [@media(max-width:530px)]:px-0 [@media(max-width:530px)]:justify-center [@media(max-width:530px)]:bg-[#fff7f7]"
    >
      <div class="w-[430px] h-full overflow-y-scroll overflow-x-hidden">
        <div class="w-full bg-[#fff7f7] flex flex-row justify-center">
          <div class="bg-[#fff7f7] w-[430px] relative">
            <div
              id="feature"
              class="relative w-[390px] h-[476px] bg-[url(<?php echo get_template_directory_uri();?>/assets/rectangle-1.png)] bg-[100%_100%]"
            >
              <img
                class="absolute top-[35px] right-[30.58px]"
                alt="Image"
                src="<?php echo get_template_directory_uri();?>/assets/Group23.png"
              />
              <img
                class="absolute top-[24px] left-[20px]"
                alt="Image"
                src="<?php echo get_template_directory_uri();?>/assets/logo-1.svg"
              />
            </div>
            <div class="relative w-[396px] h-[195px] mt-8 mx-auto">
              <div class="relative w-full h-full">
                <img
                  class="w-[374px] h-[123.77px] mx-auto"
                  alt="Image"
                  src="<?php echo get_template_directory_uri();?>/assets/Group25.png"
                />

                <div
                  class="flex w-[390px] h-[51px] items-center justify-center gap-2.5 px-1 py-[3px] mt-[20.67px] mx-auto bg-[#ff6b6b]"
                >
                  <div
                    class="relative w-fit mt-[-2.00px] [font-family:'Noto_Sans_JP',Helvetica] font-normal text-white text-[34px] text-center tracking-[-2.72px] leading-[46.5px] whitespace-nowrap"
                  >
                    太りにくく痩せやすい身体
                  </div>
                </div>
                <div
                  class="absolute top-[115px] left-[-2px] tracking-[0] leading-[30.9px] whitespace-nowrap"
                >
                  <img src="<?php echo get_template_directory_uri();?>/assets/Answer.png" />
                </div>
              </div>
            </div>
            <div
              class="w-[390px] mx-auto mt-[26px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-lg tracking-[1.28px] leading-[29.5px]"
            >
              プロトレーナー監修の独自メソッドで、<br />疲労回復しながら無理なく運動習慣が身につき、太りにくく痩せやすい体へ。
            </div>
            <div class="slideX-img" id="slide">
              <div class="flowingX-text">
                <object data="<?php echo get_template_directory_uri();?>/assets/slogan.svg" type=""></object>
              </div>
            </div>
            <div class="flex flex-col w-full items-center gap-20 mt-10">
              <section class="flex flex-col w-full max-w-[390px] gap-4">
                <div class="flex items-center w-full justify-end">
                  <div
                    class="rounded-full bg-card text-card-foreground shadow inline-flex border-0"
                  >
                    <div
                      class="p-6 flex items-center justify-center px-6 py-4 bg-[#666d7e] rounded-[57px]"
                    >
                      <p
                        class="w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-white text-base tracking-[1.20px] leading-[21px] text-right"
                      >
                        痩せたいけどやる気が起きない...
                      </p>
                    </div>
                  </div>
                  <img
                    class="relative w-[17px] h-[19px] -ml-0.5"
                    alt="Message pointer"
                    src="<?php echo get_template_directory_uri();?>/assets/vector-3-3.svg"
                  />
                </div>
                <div class="flex items-center w-full">
                  <img
                    class="relative w-[17px] h-[19px]"
                    alt="Message pointer"
                    src="<?php echo get_template_directory_uri();?>/assets/vector-3-2.svg"
                  />
                  <div
                    class="rounded-full bg-card text-card-foreground shadow inline-flex border-0 -ml-0.5"
                  >
                    <div
                      class="p-6 flex items-center justify-center px-6 py-4 bg-[#666d7e] rounded-[57px]"
                    >
                      <p
                        class="w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-white text-base tracking-[1.20px] leading-[21px]"
                      >
                        ハードなトレーニングや<br />食事制限は厳しい...
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex items-center w-full justify-end">
                  <div
                    class="rounded-full bg-card text-card-foreground shadow inline-flex border-0"
                  >
                    <div
                      class="p-6 flex items-center justify-center px-6 py-4 bg-[#666d7e] rounded-[57px]"
                    >
                      <p
                        class="w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-white text-base tracking-[1.20px] leading-[21px] text-right"
                      >
                        今まで何度もダイエットしたが<br />リバウンドしてしまった...
                      </p>
                    </div>
                  </div>
                  <img
                    class="relative w-[17px] h-[19px] -ml-0.5"
                    alt="Message pointer"
                    src="<?php echo get_template_directory_uri();?>/assets/vector-3-3.svg"
                  />
                </div>
                <div class="flex items-center w-full">
                  <img
                    class="relative w-[17px] h-[19px]"
                    alt="Message pointer"
                    src="<?php echo get_template_directory_uri();?>/assets/vector-3-2.svg"
                  />
                  <div
                    class="rounded-full bg-card text-card-foreground shadow inline-flex border-0 -ml-0.5"
                  >
                    <div
                      class="p-6 flex items-center justify-center px-6 py-4 bg-[#666d7e] rounded-[57px]"
                    >
                      <p
                        class="w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-white text-base tracking-[1.20px] leading-[21px]"
                      >
                        年齢とともに痩せにくくなってきた...
                      </p>
                    </div>
                  </div>
                </div>
              </section>
              <div
                class="flex flex-col items-center gap-[78px] px-5 py-20 relative self-stretch w-full flex-[0_0_auto] bg-[#ff6b6b] rounded-[0px_0px_40px_40px]"
              >
                <section class="flex flex-col items-center gap-3">
                  <div class="relative w-[108.67px] h-[49px]">
                    <div
                      class="relative w-[107px] h-[49px] bg-[url(<?php echo get_template_directory_uri();?>/assets/vector-5-1.svg)] bg-[100%_100%]"
                    >
                      <div
                        class="absolute h-[17px] top-3 left-5 [font-family:'Gen_Jyuu_Gothic-Bold',Helvetica] font-bold text-[#e94235] text-base text-center tracking-[1.44px] leading-[17.0px] whitespace-nowrap"
                      >
                        続く秘訣
                      </div>
                    </div>
                  </div>
                  <div class="flex flex-col items-center gap-2">
                    <h2
                      class="mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-normal text-white text-[28px] tracking-[1.20px] leading-7 whitespace-nowrap"
                    >
                      「通い続けられる」
                    </h2>
                  </div>
                  <div class="flex items-center justify-center">
                    <span
                      class="[font-family:'Noto_Sans_JP',Helvetica] font-normal text-white text-[28px] tracking-[1.20px] leading-7 whitespace-nowrap"
                      >秘密の</span
                    >
                    <div
                      class="border text-card-foreground shadow inline-flex items-center gap-[7.03px] p-1 bg-white border-none"
                    >
                      <div class="p-0">
                        <img
                          class="w-[77.32px] h-[24.95px]"
                          alt="Secret key point"
                          src="<?php echo get_template_directory_uri();?>/assets/------2.svg"
                        />
                      </div>
                    </div>
                    <span
                      class="[font-family:'Noto_Sans_JP',Helvetica] font-normal text-white text-[28px] tracking-[1.20px] leading-7 whitespace-nowrap"
                      >があります</span
                    >
                  </div>
                </section>
                <div class="flex flex-col w-full items-start gap-20">
                  <div
                    class="text-card-foreground flex flex-col items-center gap-5 w-full border-none bg-transparent"
                  >
                    <div
                      class="relative relative flex flex-col items-center gap-5 w-full p-0"
                    >
                      <div
                        class="relative w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-normal text-2xl text-center tracking-[1.20px] leading-9"
                      >
                        <span
                          class="text-white tracking-[1.2px] whitespace-pre-line"
                          >通い放題で <br />"習慣化"が当たり前に</span
                        >
                      </div>
                      <div class="relative w-full h-60">
                        <img
                          class="h-60 mx-auto"
                          alt="Service illustration"
                          src="<?php echo get_template_directory_uri();?>/assets/component-4-5.svg"
                        />
                      </div>
                      <div
                        class="w-full font-normal text-white leading-7 [font-family:'Noto_Sans_JP',Helvetica] text-[15px] tracking-[0] whitespace-pre-line"
                      >
                        ジム通いが続かない原因は、「今日は行くべきか…？」と毎回迷うこと。
                        UNICOなら"通い放題"で回数制限を気にせず、30分のスキマ時間にサッと通える。
                        「気がつけば習慣になっていた」そんな自然な流れをつくります。
                      </div>
                      <div class="absolute top-[-41px] left-0">
                        <img alt="Service label" src="<?php echo get_template_directory_uri();?>/assets/step1.svg" />
                      </div>
                    </div>
                  </div>
                  <div
                    class="text-card-foreground flex flex-col items-center gap-5 w-full border-none bg-transparent"
                  >
                    <div
                      class="relative flex flex-col items-center gap-5 w-full p-0 justify-center"
                    >
                      <div
                        class="relative w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-normal text-2xl text-center tracking-[1.20px] leading-9"
                      >
                        <span
                          class="text-white tracking-[1.2px] whitespace-pre-line"
                          >完全パーソナル設計で<br />"結果"に直結</span
                        >
                      </div>
                      <div class="relative w-full h-60">
                        <img
                          class="h-60 mx-auto"
                          alt="Service illustration"
                          src="<?php echo get_template_directory_uri();?>/assets/component-4-4.svg"
                        />
                      </div>
                      <div
                        class="w-full font-normal text-white leading-7 [font-family:'Noto_Sans_JP',Helvetica] text-[15px] tracking-[0] whitespace-pre-line"
                      >
                        あなたの目標・体力・ライフスタイルに合わせて、プロトレーナーが完全オーダーメイドでプログラムを設計。「何となくやる」ではなく「意味のある時間」にするから、効率よく結果が出ます。
                      </div>
                      <div class="absolute top-[-41px] left-0">
                        <img alt="Service label" src="<?php echo get_template_directory_uri();?>/assets/step2.svg" />
                      </div>
                    </div>
                  </div>
                  <div
                    class="text-card-foreground flex flex-col items-center gap-5 w-full border-none bg-transparent"
                  >
                    <div
                      class="relative flex flex-col items-center gap-5 w-full p-0"
                    >
                      <div
                        class="relative w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-normal text-2xl text-center tracking-[1.20px] leading-9"
                      >
                        <span
                          class="text-white tracking-[1.2px] whitespace-pre-line"
                          >無理のない料金で<br />"通える"を継続</span
                        >
                      </div>
                      <div class="relative w-full h-60">
                        <img
                          class="mx-auto"
                          alt="Service illustration"
                          src="<?php echo get_template_directory_uri();?>/assets/component-4-3.svg"
                        />
                      </div>
                      <div
                        class="w-full font-normal text-white leading-7 [font-family:'Noto_Sans_JP',Helvetica] text-[15px] tracking-[0] whitespace-pre-line"
                      >
                        「パーソナルジム×通い放題」なのに、想像以上に通いやすい料金設定。
                        高すぎて続かない…そんな不安を払拭し、"継続できる選択肢"を用意しています。
                      </div>
                      <div class="absolute top-[-41px] left-0">
                        <img alt="Service label" src="<?php echo get_template_directory_uri();?>/assets/step3.svg" />
                      </div>
                    </div>
                  </div>
                  <div
                    class="text-card-foreground flex flex-col items-center gap-5 w-full border-none bg-transparent"
                  >
                    <div
                      class="relative flex flex-col items-center gap-5 w-full p-0"
                    >
                      <div
                        class="relative w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-normal text-2xl text-center tracking-[1.20px] leading-9"
                      >
                        <span
                          class="text-white tracking-[1.2px] whitespace-pre-line"
                          >手ぶらでOK！<br />"すき間時間"に寄れる身軽さ</span
                        >
                      </div>
                      <div class="relative w-full h-60">
                        <img
                          class="h-60 mx-auto"
                          alt="Service illustration"
                          src="<?php echo get_template_directory_uri();?>/assets/component-4-1.svg"
                        />
                      </div>
                      <div
                        class="w-full font-normal text-white leading-7 [font-family:'Noto_Sans_JP',Helvetica] text-[15px] tracking-[0] whitespace-pre-line"
                      >
                        ウェアもシューズも無料レンタルだから、仕事帰りや予定の合間にもふらっと通える。「今日は準備してないし…」という言い訳をつくらせません。
                      </div>
                      <div class="absolute top-[-41px] left-0">
                        <img alt="Service label" src="<?php echo get_template_directory_uri();?>/assets/step4.svg" />
                      </div>
                    </div>
                  </div>
                  <div
                    class="text-card-foreground flex flex-col items-center gap-5 w-full border-none bg-transparent"
                  >
                    <div
                      class="relative flex flex-col items-center gap-5 w-full p-0"
                    >
                      <div
                        class="relative w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-normal text-2xl text-center tracking-[1.20px] leading-9"
                      >
                        <span
                          class="text-white tracking-[1.2px] whitespace-pre-line"
                          >毎日の"生活動線"にあるから<br />自然と通える</span
                        >
                      </div>
                      <div class="relative w-full h-60">
                        <img
                          class="mx-auto h-60"
                          alt="Service illustration"
                          src="<?php echo get_template_directory_uri();?>/assets/component-4.svg"
                        />
                      </div>
                      <div
                        class="w-full font-normal text-white leading-7 [font-family:'Noto_Sans_JP',Helvetica] text-[15px] tracking-[0] whitespace-pre-line"
                      >
                        買い物やお子さまの送り迎えの「ついで」に。わざわざ感がないから、習慣にしやすいんです。
                      </div>
                      <div class="absolute top-[-41px] left-0">
                        <img alt="Service label" src="<?php echo get_template_directory_uri();?>/assets/step5.svg" />
                      </div>
                    </div>
                  </div>
                </div>
                <img
                  class="w-[390px] h-8 absolute top-0 left-5"
                  alt="Rectangle"
                  src="<?php echo get_template_directory_uri();?>/assets/rectangle-8.svg"
                />
              </div>
              <section class="w-full py-2">
                <div
                  class="rounded-xl border bg-card text-card-foreground border-none shadow-none"
                >
                  <div class="p-0 flex md:flex-row border-b-4 border-[#FFC2C2]">
                    <div class="relative">
                      <img
                        class="w-[153px] h-[178px] object-cover"
                        alt="Female trainer"
                        src="<?php echo get_template_directory_uri();?>/assets/image-6.png"
                      />
                    </div>
                    <div class="relative flex-1">
                      <div class="absolute top-[-8px] left-[-38px]">
                        <h2
                          class="font-['Noto_Sans_JP',Helvetica] font-normal text-[#0d384a] text-2xl tracking-[1.20px] leading-9 underline decoration-dashed decoration-[#FF6B6B] underline-offset-8"
                        >
                          女性トレーナー在籍で<br />安心サポート
                        </h2>
                      </div>
                      <p
                        class="absolute bottom-[10px] ['Noto_Sans_JP',Helvetica] font-normal text-[#0d384a] text-sm leading-6"
                      >
                        女性スタッフがいるから、はじめての<br />ジム通いも安心。<br />不安や悩みも相談しやすい環境で、<br />あなたのペースを大切にサポートします。
                      </p>
                    </div>
                  </div>
                </div>
              </section>
              <div
                class="rounded-xl border bg-card text-card-foreground w-[430px] border-none shadow-none mt-[42px]"
              >
                <div class="p-0">
                  <div class="relative h-[606px]">
                    <div
                      class="flex flex-col w-full bg-[#ff6b6b] border-t-[5px] border-b-[5px] border-white justify-center"
                    >
                      <div
                        class="absolute w-[197px] h-[90px] top-[-17px] left-[117px]"
                      >
                        <div class="relative -top-6 -left-1">
                          <img
                            class="absolute"
                            alt="Vector"
                            src="<?php echo get_template_directory_uri();?>/assets/vector.svg"
                          />
                        </div>
                      </div>
                      <section
                        class="flex items-center gap-2 pt-[31px] px-[42px]"
                      >
                        <div
                          class="relative w-[118px] h-[118px] bg-[url(<?php echo get_template_directory_uri();?>/assets/star-1.svg)] bg-cover bg-no-repeat"
                        >
                          <div
                            class="absolute w-[66px] h-[73px] top-[26px] left-[29px]"
                          >
                            <div class="relative w-[60px] h-[73px]">
                              <div
                                class="absolute w-[50px] h-[73px] top-0 left-0"
                              >
                                <div
                                  class="absolute h-7 top-0 left-2.5 [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#ff6b6b] text-xl text-center tracking-[0] leading-7 whitespace-nowrap"
                                >
                                  先着
                                </div>
                                <div
                                  class="absolute h-14 top-[17px] left-0 income_h1 text-[#ff6b6b] text-[40px] text-center leading-[56px] whitespace-nowrap font-normal tracking-[0]"
                                >
                                  5
                                </div>
                              </div>
                              <div
                                class="absolute h-7 top-[34px] left-5 [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#ff6b6b] text-xl text-center tracking-[0] leading-7 whitespace-nowrap"
                              >
                                名様
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="[font-family:'Noto_Sans_JP',Helvetica] font-medium text-white text-xl tracking-[0] leading-7"
                        >
                          無料体験に<br />ご参加いただいた方限定
                        </div>
                      </section>
                      <div
                        class="bg-white rounded-xl mt-[6px] mx-3 mb-5 flex flex-col justify-center pb-4"
                      >
                        <div class="flex items-center gap-[9px] p-5">
                          <div
                            class="border text-card-foreground shadow w-40 h-[163px] bg-[#fff7f7] rounded-[20px] border-none"
                          >
                            <div class="p-0 relative h-full">
                              <div
                                class="absolute h-[22px] top-[18px] left-1/2 transform -translate-x-1/2 font-['Noto_Sans_JP',Helvetica] font-normal text-[#ff6b6b] text-base tracking-[0] leading-[22.4px] whitespace-nowrap"
                              >
                                入会金
                              </div>
                              <div
                                class="absolute w-[70px] h-28 top-[25px] left-[47px]"
                              >
                                <div
                                  class="absolute h-28 top-0 left-0 income_h1 text-[#e94235] text-[80px] text-center leading-[112px] whitespace-nowrap font-normal tracking-[0]"
                                >
                                  0
                                </div>
                                <div
                                  class="absolute h-[34px] top-[52px] left-[42px] font-['Noto_Sans_JP',Helvetica] font-bold text-[#e94235] text-2xl tracking-[0] leading-[33.6px] whitespace-nowrap"
                                >
                                  円
                                </div>
                              </div>
                              <div
                                class="flex flex-col w-[101px] items-start gap-[3px] absolute top-[121px] left-[29px]"
                              >
                                <div
                                  class="relative self-stretch mt-[-1.00px] font-['Noto_Sans_JP',Helvetica] font-medium text-[#ff6b6b] text-sm tracking-[0] leading-[19.6px]"
                                >
                                  最大33,000円分
                                </div>
                                <div
                                  data-orientation="horizontal"
                                  role="none"
                                  class="shrink-0 w-full h-px bg-[#ff6b6b] mb-[-1.00px]"
                                ></div>
                              </div>
                            </div>
                          </div>
                          <div class="relative w-7 h-7">
                            <img
                              alt="campain plus"
                              src="<?php echo get_template_directory_uri();?>/assets/campain_plus.svg"
                            />
                          </div>
                          <div
                            class="border text-card-foreground shadow w-40 h-[163px] bg-[#fff7f7] rounded-[20px] border-none"
                          >
                            <div class="p-0 relative h-full">
                              <div
                                class="absolute h-[22px] top-[18px] left-1/2 transform -translate-x-1/2 font-['Noto_Sans_JP',Helvetica] font-normal text-[#ff6b6b] text-base tracking-[0] leading-[22.4px] whitespace-nowrap"
                              >
                                初月会費
                              </div>
                              <div
                                class="absolute h-[62px] top-[50px] left-[35px] font-['Noto_Sans_JP',Helvetica] font-bold text-[#e94235] text-[44.2px] tracking-[0] leading-[61.9px] whitespace-nowrap"
                              >
                                半額
                              </div>
                              <div
                                class="flex flex-col w-[101px] items-start gap-[3px] absolute top-[121px] left-[29px]"
                              >
                                <div
                                  class="relative self-stretch mt-[-1.00px] font-['Noto_Sans_JP',Helvetica] font-medium text-[#ff6b6b] text-sm tracking-[0] leading-[19.6px]"
                                >
                                  最大19,250円分
                                </div>
                                <div
                                  data-orientation="horizontal"
                                  role="none"
                                  class="shrink-0 w-full h-px bg-[#ff6b6b] mb-[-1.00px]"
                                ></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="flex flex-col w-full items-center gap-1.5">
                          <div class="inline-flex items-end gap-2">
                            <img
                              class="w-[15.04px] h-[17px]"
                              alt="Vector"
                              src="<?php echo get_template_directory_uri();?>/assets/vector-3.svg"
                            />
                            <div
                              class="[font-family:'Noto_Sans_JP',Helvetica] font-bold text-[#ff675f] text-[15px] text-center tracking-[0] leading-[19.6px] whitespace-nowrap"
                            >
                              さらに！入会した方限定で
                            </div>
                            <img
                              class="w-[15.04px] h-[17px]"
                              alt="Vector"
                              src="<?php echo get_template_directory_uri();?>/assets/vector-2.svg"
                            />
                          </div>
                          <div class="relative w-full h-20">
                            <div class="relative w-full h-20">
                              <div
                                class="border text-card-foreground shadow flex h-16 items-center justify-center gap-2 pl-[62px] pr-3 py-4 absolute top-2 left-[39px] bg-[#e4f0ff] rounded-[20px] border-none w-[347px]"
                              >
                                <div class="p-0">
                                  <div class="inline-flex items-start">
                                    <div
                                      class="[font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-[15px] tracking-[0] leading-7 whitespace-nowrap"
                                    >
                                      酸素・水素カプセル
                                    </div>
                                    <div class="inline-flex items-center">
                                      <div class="inline-flex items-end">
                                        <div
                                          class="income_h1 text-[#e94235] text-2xl leading-7 whitespace-nowrap font-normal tracking-[0]"
                                        >
                                          1
                                        </div>
                                        <div
                                          class="[font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#e94235] text-[15px] tracking-[0] leading-7 whitespace-nowrap"
                                        >
                                          回無料サービス
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <img
                                class="absolute w-20 h-20 top-0 left-5 object-cover"
                                alt="Ellipse"
                                src="<?php echo get_template_directory_uri();?>/assets/ellipse-1.svg"
                              />
                            </div>
                          </div>
                        </div>
                        <button
                          class="relative inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 px-4 py-2 w-[180px] h-[60px] bg-[#eb4747] rounded-[45.5px] shadow-[0px_16px_30px_#515a5e59] text-white hover:bg-[#d43d3d] mt-2 mx-auto"
                        >
                          <div
                            class="relative [font-family:'Noto_Sans_JP',Helvetica] font-normal text-[15px] text-center tracking-[1.20px] leading-[21px]"
                          >
                            まずは無料体験を<br />予約する
                          </div>
                          <div
                            class="absolute w-[26px] h-7 top-[33px] left-[151px] bg-cover bg-[50%_50%]"
                          >
                            <img alt="gif" src="<?php echo get_template_directory_uri();?>/assets/click.gif" />
                          </div>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex flex-col w-full items-center gap-5">
                <div class="flex flex-col items-center gap-1">
                  <h2
                    class="font-black text-[#ff675f] text-4xl text-center leading-9 whitespace-nowrap [font-family:'Inter',Helvetica]"
                  >
                    customer voice
                  </h2>
                  <p
                    class="font-bold text-[#ff675f] text-center leading-[19.6px] whitespace-nowrap [font-family:'Noto_Sans_JP',Helvetica] text-[15px]"
                  >
                    お客様の声
                  </p>
                </div>
                <p
                  class="w-full [font-family:'Noto_Sans_JP',Helvetica] font-normal text-[#131313] text-[15px] leading-7 text-center"
                >
                  Unicoに通うお客様より体験した感想をいただきました。
                </p>
                <div
                  class="border text-card-foreground shadow w-full bg-white rounded-[20px] overflow-hidden"
                >
                  <div class="flex flex-col items-start gap-6 py-[30px] px-5">
                    <div class="flex flex-col items-start gap-[11px] w-full">
                      <div class="flex items-start gap-[7px]">
                        <img
                          class="w-10 h-10 object-cover rounded-full"
                          alt="Profile"
                          src="<?php echo get_template_directory_uri();?>/assets/image.png"
                        />
                        <div class="flex flex-col w-[198px] items-start pt-1.5">
                          <p
                            class="w-full [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#ff6b6b] text-[15px] leading-7"
                          >
                            30代男性・会社員
                          </p>
                          <h3
                            class="w-full [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-lg leading-[25.2px]"
                          >
                            生活の一環になり、毎回のレッスンが楽しみ
                          </h3>
                        </div>
                      </div>
                      <div class="flex items-center pl-7 w-full">
                        <img
                          class="w-5 h-5"
                          alt="Quote icon"
                          src="<?php echo get_template_directory_uri();?>/assets/vector-4.svg"
                        />
                        <div
                          class="flex items-center justify-center gap-2.5 p-4 flex-1 bg-[#f1f1f1] rounded-2xl"
                        >
                          <p
                            class="flex-1 [font-family:'Noto_Sans_JP',Helvetica] font-normal text-[#0d384a] text-sm leading-[22.4px]"
                          >
                            たびたびリバウンドを繰り返していたので、安くて継続しやすそうな価格帯でのジムを探していました。体験にいってみたのですが、トレーナーさんもとても丁寧で親切且つ適度に追い込んで頂き、すぐに入会を決めました。<br />話も丁寧に聞いてもらえ、自分の体の特性や生活習慣などに合わせたメニューを組んでもらえました。<br />トレーニング後は、水素カプセルにもはいることができ、頭がスッキリし日頃のストレスをここに来ると発散できます。<br />今は、生活の一環になり、毎回のレッスンが楽しみです！
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="flex flex-col w-[390px] items-center gap-10 pt-3"
                id="facilities"
              >
                <section class="flex flex-col items-center gap-1">
                  <h2
                    class="font-black text-[#ff675f] text-4xl text-center leading-9 font-sans"
                  >
                    facilities
                  </h2>
                  <p
                    class="font-bold text-[#ff675f] text-center leading-[19.6px] text-[15px] font-['Noto_Sans_JP',Helvetica]"
                  >
                    安心・嬉しい4つの設備
                  </p>
                </section>
                <div class="flex flex-col items-start gap-5">
                  <div
                    class="flex items-start justify-center gap-6 pt-10 pb-5 px-[26px] relative rounded-[40px] border border-solid border-[#ff6b6b]"
                  >
                    <div
                      class="flex flex-col w-full w-full items-start gap-[18px] relative"
                    >
                      <div
                        class="flex flex-col items-start gap-2 relative self-stretch w-full"
                      >
                        <div
                          class="relative self-stretch mt-[-1.00px] income_h1 text-[#ff6b6b] text-[28px] leading-7 font-normal"
                        >
                          01
                        </div>
                        <div
                          class="relative self-stretch font-['Noto_Sans_JP',Helvetica] font-normal text-[#ff6b6b] text-lg tracking-[1.20px] leading-[28.8px]"
                        >
                          奈良県初導入の水素×酸素カプセル
                        </div>
                      </div>
                      <img
                        class="relative self-stretch w-full h-[188px] object-cover rounded-[20px]"
                        alt="水素×酸素カプセル"
                        src="<?php echo get_template_directory_uri();?>/assets/rectangle-13-4.png"
                      />
                      <p
                        class="relative self-stretch font-['Noto_Sans_JP',Helvetica] font-normal text-[#0d384a] text-sm leading-[22.4px]"
                      >
                        世界初の特許技術を使用したカプセルで、高気圧環境での酸素と水素の同時吸入により、痩身効果・美白美肌・アンチエイジング・疲労回復・ケガの早期回復など、幅広い美容＆健康効果が期待できます。
                      </p>
                      <span
                        id="icon-4"
                        onclick="toggleFacility()"
                        class="flex items-center transition-transform duration-300 mx-auto gap-1.5"
                      >
                        <span
                          class="relative w-fit mt-[-1.00px] font-['Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-sm leading-[14px] whitespace-nowrap"
                          >もっと見る</span
                        >
                        <img
                          alt="facilities plus"
                          src="<?php echo get_template_directory_uri();?>/assets/facility_plus.png"
                        />
                      </span>
                      <div id="content-4" class="flex flex-col justify-center">
                        <div
                          class="border text-card-foreground shadow flex flex-col items-center gap-[22px] p-0 relative self-stretch w-full bg-white rounded-[20px] border-none"
                        >
                          <div class="p-5 w-full">
                            <div
                              class="flex flex-col items-start gap-[3px] relative w-full mb-[22px]"
                            >
                              <h3
                                class="relative mt-[-1.00px] font-['Noto_Sans_JP',Helvetica] font-medium text-[#ff6b6b] text-base leading-[25.6px] whitespace-nowrap mx-auto underline decoration-dashed decoration-[#FF6B6B] underline-offset-8"
                              >
                                内側からのケアで得られる効果
                              </h3>
                            </div>
                            <div
                              class="flex flex-wrap items-start justify-center gap-[16px] relative self-stretch w-full"
                            >
                              <div
                                class="flex flex-col w-[129px] items-center gap-[9px] relative"
                              >
                                <img
                                  class="relative max-w-[60px] w-[60px] max-h-[60px] h-[60px]"
                                  alt="Benefit icon"
                                  src="<?php echo get_template_directory_uri();?>/assets/component-10-2.svg"
                                />
                                <div
                                  class="relative self-stretch font-['Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-sm text-center leading-[22.4px]"
                                >
                                  疲労回復
                                </div>
                              </div>
                              <img
                                class="relative w-px h-[90px] object-cover"
                                alt="Vertical separator"
                                src="<?php echo get_template_directory_uri();?>/assets/line-8-1.svg"
                              />
                              <div
                                class="flex flex-col w-[129px] items-center gap-[9px] relative"
                              >
                                <img
                                  class="relative max-w-[60px] w-[60px] max-h-[60px] h-[60px]"
                                  alt="Benefit icon"
                                  src="<?php echo get_template_directory_uri();?>/assets/component-10.svg"
                                />
                                <div
                                  class="relative self-stretch font-['Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-sm text-center leading-[22.4px]"
                                >
                                  アンチエイジング
                                </div>
                              </div>
                              <div
                                class="inline-flex items-center gap-[55px] relative flex-[0_0_auto]"
                              >
                                <img
                                  class="relative w-[120px] h-px object-cover"
                                  alt="Line"
                                  src="<?php echo get_template_directory_uri();?>/assets/line-8.svg"
                                /><img
                                  class="relative w-[120px] h-px object-cover"
                                  alt="Line"
                                  src="<?php echo get_template_directory_uri();?>/assets/line-8.svg"
                                />
                              </div>
                              <div
                                class="flex flex-col w-[129px] items-center gap-[9px] relative"
                              >
                                <img
                                  class="relative max-w-[60px] w-[60px] max-h-[60px] h-[60px]"
                                  alt="Benefit icon"
                                  src="<?php echo get_template_directory_uri();?>/assets/component-10-3.svg"
                                />
                                <div
                                  class="relative self-stretch font-['Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-sm text-center leading-[22.4px]"
                                >
                                  肌のターンオーバー
                                </div>
                              </div>
                              <img
                                class="relative w-px h-[90px] object-cover"
                                alt="Vertical separator"
                                src="<?php echo get_template_directory_uri();?>/assets/line-8-1.svg"
                              />
                              <div
                                class="flex flex-col w-[129px] items-center gap-[9px] relative"
                              >
                                <img
                                  class="relative max-w-[60px] w-[60px] max-h-[60px] h-[60px]"
                                  alt="Benefit icon"
                                  src="<?php echo get_template_directory_uri();?>/assets/component-10.svg"
                                />
                                <div
                                  class="relative self-stretch font-['Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-sm text-center leading-[22.4px]"
                                >
                                  血行促進
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <button
                          id="close-4"
                          class="flex items-center justify-center gap-1.5 relative self-stretch w-full mt-[18px]"
                        >
                          <span
                            class="relative w-fit mt-[-1.00px] font-['Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-sm leading-[14px] whitespace-nowrap"
                            >閉じる</span
                          >
                          <img
                            alt="facilities minus"
                            src="<?php echo get_template_directory_uri();?>/assets/facility_minus.png"
                          />
                        </button>
                      </div>
                    </div>
                    <div
                      class="absolute w-2 h-[66px] top-10 left-px bg-[#ff6b6b]"
                    ></div>
                  </div>
                  <div
                    class="relative flex justify-center py-10 px-[26px] rounded-[40px] border border-solid border-[#ff6b6b]"
                  >
                    <div
                      class="absolute h-[90px] w-2 top-10 left-px bg-[#ff6b6b]"
                    ></div>
                    <div class="flex flex-col w-full items-start gap-[18px]">
                      <div class="flex flex-col items-start gap-2 w-full">
                        <div
                          class="w-full mt-[-1.00px] income_h1 text-[#ff6b6b] text-[28px] leading-7 font-normal"
                        >
                          02
                        </div>
                        <div
                          class="w-full [font-family:'Noto_Sans_JP',Helvetica] font-normal text-[#ff6b6b] text-lg tracking-[1.20px] leading-[28.8px]"
                        >
                          トレーニングウェア＆シューズの無料レンタル
                        </div>
                      </div>
                      <div
                        class="rounded-xl border bg-card text-card-foreground w-full border-none shadow-none"
                      >
                        <div class="flex items-center gap-3 p-0">
                          <img
                            class="w-[150px] h-[150px] object-cover rounded-[20px]"
                            alt="Image"
                            src="<?php echo get_template_directory_uri();?>/assets/image-4.png"
                          />
                          <div
                            class="flex-1 [font-family:'Noto_Sans_JP',Helvetica] font-normal text-[#0d384a] text-sm leading-[22.4px]"
                          >
                            忙しい日も、手ぶらでパッと通える。<br />無料レンタルのウェアとシューズで、準備いらずのジム習慣をサポートします。
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="bg-card text-card-foreground shadow relative flex justify-center py-10 px-[26px] rounded-[40px] border border-solid border-[#ff6b6b]"
                  >
                    <div
                      class="absolute w-2 h-[90px] top-10 left-px bg-[#ff6b6b]"
                    ></div>
                    <div
                      class="p-6 pt-0 flex flex-col w-full w-full items-start gap-[18px] px-0"
                    >
                      <div class="flex flex-col items-start gap-2 w-full">
                        <h3
                          class="w-full mt-[-1.00px] income_h1 font-normal text-[#ff6b6b] text-[28px] leading-7"
                        >
                          03
                        </h3>
                        <h4
                          class="w-full font-['Noto_Sans_JP',Helvetica] font-normal text-[#ff6b6b] text-lg tracking-[1.20px] leading-[28.8px]"
                        >
                          駅チカ、駐車場・駐輪場完備
                        </h4>
                      </div>
                      <div class="flex items-center gap-3 w-full">
                        <img
                          class="w-[150px] h-[150px] object-cover rounded-[20px]"
                          alt="Image"
                          src="<?php echo get_template_directory_uri();?>/assets/image-1.png"
                        />
                        <p
                          class="flex-1 font-['Noto_Sans_JP',Helvetica] font-normal text-[#0d384a] text-sm leading-[22.4px]"
                        >
                          通いやすいから、続けたくなる。<br />駅チカで、車や自転車でもラクに通える環境をご用意しています。
                        </p>
                      </div>
                    </div>
                  </div>
                  <div
                    class="bg-card text-card-foreground shadow relative flex justify-center py-10 px-[26px] rounded-[40px] border border-[#ff6b6b]"
                  >
                    <div
                      class="absolute w-2 h-[90px] top-10 left-px bg-[#ff6b6b]"
                    ></div>
                    <div
                      class="p-6 pt-0 flex flex-col items-start gap-[18px] px-0 w-full w-full"
                    >
                      <div class="flex flex-col items-start gap-2 w-full">
                        <div
                          class="w-full mt-[-1.00px] income_h1 font-normal text-[#ff6b6b] text-[28px] leading-7"
                        >
                          04
                        </div>
                        <div
                          class="w-full [font-family:'Noto_Sans_JP',Helvetica] font-normal text-[#ff6b6b] text-lg tracking-[1.20px] leading-[28.8px]"
                        >
                          清潔で快適なトレーニング空間
                        </div>
                      </div>
                      <div class="flex items-center gap-3 w-full">
                        <img
                          class="object-cover w-[150px] h-[150px] rounded-[20px]"
                          alt="Training space"
                          src="<?php echo get_template_directory_uri();?>/assets/rectangle-11-1.png"
                        />
                        <p
                          class="flex-1 [font-family:'Noto_Sans_JP',Helvetica] font-normal text-[#0d384a] text-sm leading-[22.4px]"
                        >
                          空間の快適さも、トレーニング効果を高める大切な要素です。<br />徹底した清掃管理と機能的な設計で、安心して運動に取り組めます。
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                id="plan"
                class="rounded-xl border text-card-foreground max-w-[430px] w-[430px] border-none shadow-none bg-white"
              >
                <div
                  class="p-6 flex flex-col items-center gap-10 px-5 pb-20 pt-3"
                >
                  <div class="flex flex-col items-center gap-1">
                    <div
                      class="[font-family:'Inter',Helvetica] font-black text-[#ff675f] text-4xl text-center tracking-[0] leading-9 whitespace-nowrap"
                    >
                      plan
                    </div>
                    <div
                      class="font-bold text-[#ff675f] text-center leading-[19.6px] whitespace-nowrap [font-family:'Noto_Sans_JP',Helvetica] text-[15px] tracking-[0]"
                    >
                      料金プラン
                    </div>
                  </div>
                  <div class="flex flex-col gap-3 w-full items-center">
                    <div class="flex items-center justify-center gap-2">
                      <img
                        class="w-[23px] h-[26px]"
                        alt="Vector"
                        src="<?php echo get_template_directory_uri();?>/assets/vector-1.svg"
                      />
                      <div
                        class="[font-family:'Noto_Sans_JP',Helvetica] font-bold text-[#ff6b6b] text-base tracking-[1.00px] leading-7 whitespace-nowrap"
                      >
                        絶賛キャンペーン中！
                      </div>
                      <img
                        class="w-[23px] h-[26px]"
                        alt="Vector"
                        src="<?php echo get_template_directory_uri();?>/assets/vector-2-2.svg"
                      />
                    </div>
                    <button
                      class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 text-primary-foreground shadow h-9 px-4 py-1.5 bg-[#ff6b6b] rounded-[20px] hover:bg-[#e05c5c]"
                    >
                      <div
                        class="[font-family:'Noto_Sans_JP',Helvetica] font-medium text-white text-sm tracking-[1.00px] leading-7 whitespace-nowrap"
                      >
                        30分パーソナルトレーニング通い放題
                      </div>
                    </button>

                    <img alt="Plan table" src="<?php echo get_template_directory_uri();?>/assets/plan_table.png" />
                    <div class="relative w-[38px] h-[38px]">
                      <div class="relative h-[38px]">
                        <img alt="Plan table" src="<?php echo get_template_directory_uri();?>/assets/plan_plus.svg" />
                      </div>
                    </div>
                    <div
                      class="border text-card-foreground relative flex items-center justify-center gap-2 p-4 bg-[#e4f0ff] rounded-[20px] border-none"
                    >
                      <img
                        class="w-[103px] h-[103px] object-cover"
                        alt="Ellipse"
                        src="<?php echo get_template_directory_uri();?>/assets/ellipse-1.svg"
                      />
                      <div class="flex flex-col items-start p-0">
                        <div class="flex items-center">
                          <span
                            class="[font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-[15px] leading-7 whitespace-nowrap"
                            >追加</span
                          >
                          <div class="flex items-end">
                            <span
                              class="income_h1 font-normal text-[#0d384a] text-2xl leading-7 whitespace-nowrap"
                              >20,000</span
                            ><span
                              class="[font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-[15px] leading-7 whitespace-nowrap"
                              >円(税込)で</span
                            >
                          </div>
                        </div>
                        <p
                          class="w-full [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-[15px] leading-7"
                        >
                          酸素・水素カプセル25分入り放題
                        </p>
                      </div>
                      <span
                        class="absolute -top-5 -left-3.5 [font-family:'Profiles-Regular',Helvetica] font-normal text-[#3783ff] text-base leading-[21.9px] whitespace-nowrap"
                        ><img
                          alt="Hydrogen Capsules"
                          src="<?php echo get_template_directory_uri();?>/assets/HyCa.svg
                    "
                      /></span>
                    </div>
                  </div>
                  <section class="flex flex-col gap-3 w-full items-center">
                    <div
                      class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-white shadow hover:bg-primary/80 px-4 py-1.5 bg-[#3783ff] rounded-[20px] font-medium text-sm tracking-[1.00px] leading-7"
                    >
                      酸素・水素カプセル料金
                    </div>
                    <img alt="plan table 2" src="<?php echo get_template_directory_uri();?>/assets/plan_table2.png" />
                  </section>
                </div>
              </div>
              <div
                class="rounded-xl border bg-card text-card-foreground w-[430px] border-none shadow-none mt-[42px]"
              >
                <div class="p-0">
                  <div class="relative h-[606px]">
                    <div
                      class="flex flex-col w-full bg-[#ff6b6b] border-t-[5px] border-b-[5px] border-white justify-center"
                    >
                      <div
                        class="absolute w-[197px] h-[90px] top-[-17px] left-[117px]"
                      >
                        <div class="relative -top-6 -left-1">
                          <img
                            class="absolute"
                            alt="Vector"
                            src="<?php echo get_template_directory_uri();?>/assets/vector.svg"
                          />
                        </div>
                      </div>
                      <section
                        class="flex items-center gap-2 pt-[31px] px-[42px]"
                      >
                        <div
                          class="relative w-[118px] h-[118px] bg-[url(<?php echo get_template_directory_uri();?>/assets/star-1.svg)] bg-cover bg-no-repeat"
                        >
                          <div
                            class="absolute w-[66px] h-[73px] top-[26px] left-[29px]"
                          >
                            <div class="relative w-[60px] h-[73px]">
                              <div
                                class="absolute w-[50px] h-[73px] top-0 left-0"
                              >
                                <div
                                  class="absolute h-7 top-0 left-2.5 [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#ff6b6b] text-xl text-center tracking-[0] leading-7 whitespace-nowrap"
                                >
                                  先着
                                </div>
                                <div
                                  class="absolute h-14 top-[17px] left-0 income_h1 text-[#ff6b6b] text-[40px] text-center leading-[56px] whitespace-nowrap font-normal tracking-[0]"
                                >
                                  5
                                </div>
                              </div>
                              <div
                                class="absolute h-7 top-[34px] left-5 [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#ff6b6b] text-xl text-center tracking-[0] leading-7 whitespace-nowrap"
                              >
                                名様
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="[font-family:'Noto_Sans_JP',Helvetica] font-medium text-white text-xl tracking-[0] leading-7"
                        >
                          無料体験に<br />ご参加いただいた方限定
                        </div>
                      </section>
                      <div
                        class="bg-white rounded-xl mt-[6px] mx-3 mb-5 flex flex-col justify-center pb-4"
                      >
                        <div class="flex items-center gap-[9px] p-5">
                          <div
                            class="border text-card-foreground shadow w-40 h-[163px] bg-[#fff7f7] rounded-[20px] border-none"
                          >
                            <div class="p-0 relative h-full">
                              <div
                                class="absolute h-[22px] top-[18px] left-1/2 transform -translate-x-1/2 font-['Noto_Sans_JP',Helvetica] font-normal text-[#ff6b6b] text-base tracking-[0] leading-[22.4px] whitespace-nowrap"
                              >
                                入会金
                              </div>
                              <div
                                class="absolute w-[70px] h-28 top-[25px] left-[47px]"
                              >
                                <div
                                  class="absolute h-28 top-0 left-0 income_h1 text-[#e94235] text-[80px] text-center leading-[112px] whitespace-nowrap font-normal tracking-[0]"
                                >
                                  0
                                </div>
                                <div
                                  class="absolute h-[34px] top-[52px] left-[42px] font-['Noto_Sans_JP',Helvetica] font-bold text-[#e94235] text-2xl tracking-[0] leading-[33.6px] whitespace-nowrap"
                                >
                                  円
                                </div>
                              </div>
                              <div
                                class="flex flex-col w-[101px] items-start gap-[3px] absolute top-[121px] left-[29px]"
                              >
                                <div
                                  class="relative self-stretch mt-[-1.00px] font-['Noto_Sans_JP',Helvetica] font-medium text-[#ff6b6b] text-sm tracking-[0] leading-[19.6px]"
                                >
                                  最大33,000円分
                                </div>
                                <div
                                  data-orientation="horizontal"
                                  role="none"
                                  class="shrink-0 w-full h-px bg-[#ff6b6b] mb-[-1.00px]"
                                ></div>
                              </div>
                            </div>
                          </div>
                          <div class="relative w-7 h-7">
                            <img
                              alt="campain plus"
                              src="<?php echo get_template_directory_uri();?>/assets/campain_plus.svg"
                            />
                          </div>
                          <div
                            class="border text-card-foreground shadow w-40 h-[163px] bg-[#fff7f7] rounded-[20px] border-none"
                          >
                            <div class="p-0 relative h-full">
                              <div
                                class="absolute h-[22px] top-[18px] left-1/2 transform -translate-x-1/2 font-['Noto_Sans_JP',Helvetica] font-normal text-[#ff6b6b] text-base tracking-[0] leading-[22.4px] whitespace-nowrap"
                              >
                                初月会費
                              </div>
                              <div
                                class="absolute h-[62px] top-[50px] left-[35px] font-['Noto_Sans_JP',Helvetica] font-bold text-[#e94235] text-[44.2px] tracking-[0] leading-[61.9px] whitespace-nowrap"
                              >
                                半額
                              </div>
                              <div
                                class="flex flex-col w-[101px] items-start gap-[3px] absolute top-[121px] left-[29px]"
                              >
                                <div
                                  class="relative self-stretch mt-[-1.00px] font-['Noto_Sans_JP',Helvetica] font-medium text-[#ff6b6b] text-sm tracking-[0] leading-[19.6px]"
                                >
                                  最大19,250円分
                                </div>
                                <div
                                  data-orientation="horizontal"
                                  role="none"
                                  class="shrink-0 w-full h-px bg-[#ff6b6b] mb-[-1.00px]"
                                ></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="flex flex-col w-full items-center gap-1.5">
                          <div class="inline-flex items-end gap-2">
                            <img
                              class="w-[15.04px] h-[17px]"
                              alt="Vector"
                              src="<?php echo get_template_directory_uri();?>/assets/vector-3.svg"
                            />
                            <div
                              class="[font-family:'Noto_Sans_JP',Helvetica] font-bold text-[#ff675f] text-[15px] text-center tracking-[0] leading-[19.6px] whitespace-nowrap"
                            >
                              さらに！入会した方限定で
                            </div>
                            <img
                              class="w-[15.04px] h-[17px]"
                              alt="Vector"
                              src="<?php echo get_template_directory_uri();?>/assets/vector-2.svg"
                            />
                          </div>
                          <div class="relative w-full h-20">
                            <div class="relative w-full h-20">
                              <div
                                class="border text-card-foreground shadow flex h-16 items-center justify-center gap-2 pl-[62px] pr-3 py-4 absolute top-2 left-[39px] bg-[#e4f0ff] rounded-[20px] border-none w-[347px]"
                              >
                                <div class="p-0">
                                  <div class="inline-flex items-start">
                                    <div
                                      class="[font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-[15px] tracking-[0] leading-7 whitespace-nowrap"
                                    >
                                      酸素・水素カプセル
                                    </div>
                                    <div class="inline-flex items-center">
                                      <div class="inline-flex items-end">
                                        <div
                                          class="income_h1 text-[#e94235] text-2xl leading-7 whitespace-nowrap font-normal tracking-[0]"
                                        >
                                          1
                                        </div>
                                        <div
                                          class="[font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#e94235] text-[15px] tracking-[0] leading-7 whitespace-nowrap"
                                        >
                                          回無料サービス
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <img
                                class="absolute w-20 h-20 top-0 left-5 object-cover"
                                alt="Ellipse"
                                src="<?php echo get_template_directory_uri();?>/assets/ellipse-1.svg"
                              />
                            </div>
                          </div>
                        </div>
                        <button
                          class="relative inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 px-4 py-2 w-[180px] h-[60px] bg-[#eb4747] rounded-[45.5px] shadow-[0px_16px_30px_#515a5e59] text-white hover:bg-[#d43d3d] mt-2 mx-auto"
                        >
                          <div
                            class="relative [font-family:'Noto_Sans_JP',Helvetica] font-normal text-[15px] text-center tracking-[1.20px] leading-[21px]"
                          >
                            まずは無料体験を<br />予約する
                          </div>
                          <div
                            class="absolute w-[26px] h-7 top-[33px] left-[151px] bg-cover bg-[50%_50%]"
                          >
                            <img alt="gif" src="<?php echo get_template_directory_uri();?>/assets/click.gif" />
                          </div>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                id="gym"
                class="flex flex-col max-w-[430px] w-[430px] items-center gap-10 px-5 pt-3"
              >
                <section class="flex flex-col items-center gap-1">
                  <h2
                    class="font-black text-[#ff675f] text-4xl text-center leading-9 font-sans"
                  >
                    gym visit
                  </h2>
                  <p
                    class="font-bold text-[#ff675f] text-center leading-[19.6px] text-[15px] font-['Noto_Sans_JP',Helvetica]"
                  >
                    無料体験の流れ
                  </p>
                </section>
                <div class="self-stretch flex flex-col items-start w-full">
                  <div class="h-full w-full rounded-[inherit] relative">
                    <div class="flex space-x-4 pb-4">
                      <div
                        class="mySlides border bg-card text-card-foreground shadow flex-none w-[350px] rounded-[40px] overflow-hidden relative bg-white ml-4"
                      >
                        <img
                          class="w-full h-[200px] object-cover"
                          alt="Step 1 image"
                          src="<?php echo get_template_directory_uri();?>/assets/image-2.png"
                        />
                        <div class="flex flex-col items-center gap-2 p-5">
                          <h3
                            class="w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-base text-center tracking-[0] leading-6 whitespace-nowrap"
                          >
                            ① WEB予約
                          </h3>
                          <p
                            class="self-stretch font-normal text-[#595a5a] text-sm tracking-[0] leading-6 [font-family:'Noto_Sans_JP',Helvetica]"
                          >
                            まずは当ページの無料体験・カウンセリング予約からご希望日時をご予約ください。<br />ご希望日時を考慮してスタッフより確定した日時をご連絡いたします。
                          </p>
                        </div>
                      </div>
                      <div
                        class="mySlides border bg-card text-card-foreground shadow flex-none w-[350px] rounded-[40px] overflow-hidden relative bg-white"
                      >
                        <div class="relative">
                          <img
                            class="w-full h-[200px] object-cover"
                            alt="Step 2 image"
                            src="<?php echo get_template_directory_uri();?>/assets/rectangle-13.png"
                          />
                        </div>
                        <div class="flex flex-col items-center gap-2 p-5">
                          <h3
                            class="w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-base text-center tracking-[0] leading-6 whitespace-nowrap"
                          >
                            ② ご来店・受付
                          </h3>
                          <p
                            class="self-stretch font-normal text-[#595a5a] text-sm tracking-[0] leading-6 [font-family:'Noto_Sans_JP',Helvetica]"
                          >
                            夜更かし、飲酒、無理な食事制限などをおこなった状態は大変危険なので出来る限り健康な状態となるようご準備ください。<br />確定したご予約日時の10分前にお越しください。<br />手ぶらで体験トレーニングも可能です。スタッフまでお問い合わせください。
                          </p>
                        </div>
                      </div>
                      <div
                        class="mySlides border bg-card text-card-foreground shadow flex-none w-[350px] rounded-[40px] overflow-hidden relative bg-white"
                      >
                        <div class="relative">
                          <img
                            class="w-full h-[200px] object-cover"
                            alt="Step 3 image"
                            src="<?php echo get_template_directory_uri();?>/assets/rectangle-13-1.png"
                          />
                        </div>
                        <div class="flex flex-col items-center gap-2 p-5">
                          <h3
                            class="w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-base text-center tracking-[0] leading-6 whitespace-nowrap"
                          >
                            ③ カウンセリング
                          </h3>
                          <p
                            class="self-stretch font-normal text-[#595a5a] text-sm tracking-[0] leading-6 [font-family:'Noto_Sans_JP',Helvetica]"
                          >
                            体験トレーニングを始める前に簡単な身体測定、カルテの作成をおこないます。<br />カラダの悩みや、食生活、運動習慣などをお伺いします。<br />その上で、最適なトレーニングをプランニングしお客様の望むカラダ作りをサポートしアドバイスいたします。
                          </p>
                        </div>
                      </div>
                      <div
                        class="mySlides border bg-card text-card-foreground shadow flex-none w-[350px] rounded-[40px] overflow-hidden relative bg-white"
                      >
                        <div class="relative">
                          <img
                            class="w-full h-[200px] object-cover"
                            alt="Step 4 image"
                            src="<?php echo get_template_directory_uri();?>/assets/rectangle-13-2.png"
                          />
                        </div>
                        <div class="flex flex-col items-center gap-2 p-5">
                          <h3
                            class="w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-base text-center tracking-[0] leading-6 whitespace-nowrap"
                          >
                            ④ 体験トレーニング（20〜25分）
                          </h3>
                          <p
                            class="self-stretch font-normal text-[#595a5a] text-sm tracking-[0] leading-6 [font-family:'Noto_Sans_JP',Helvetica]"
                          >
                            無料カウンセリングの内容を元に、体験トレーニングを開始いたします。<br />各トレーニングメニューがどの部位に効果があるかなど丁寧に説明しながらお客様にあった体験メニューを実施していきます。<br />当日の体調も見ながら進めますのでご安心ください。
                          </p>
                        </div>
                      </div>
                      <div
                        class="mySlides border bg-card text-card-foreground shadow flex-none w-[350px] rounded-[40px] overflow-hidden relative bg-white"
                      >
                        <div class="relative">
                          <img
                            class="w-full h-[200px] object-cover"
                            alt="Step 5 image"
                            src="<?php echo get_template_directory_uri();?>/assets/rectangle-13-3.png"
                          />
                        </div>
                        <div class="flex flex-col items-center gap-2 p-5">
                          <h3
                            class="w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-base text-center tracking-[0] leading-6 whitespace-nowrap"
                          >
                            ⑤ フィードバック
                          </h3>
                          <p
                            class="self-stretch font-normal text-[#595a5a] text-sm tracking-[0] leading-6 [font-family:'Noto_Sans_JP',Helvetica]"
                          >
                            体験トレーニング後、現状のフィードバックをおこないます。<br />お客様の疑問、質問にお答えしながら次回のトレーニング方法や理想のボディを手に入れるためのアドバイスをいたします。<br />当日ご入会も可能です。次回トレーニングの予約を入れておくのが続ける秘訣です！
                          </p>
                        </div>
                      </div>
                      <div
                        class="mySlides border bg-card text-card-foreground shadow flex-none w-[350px] rounded-[40px] overflow-hidden relative bg-white"
                      >
                        <div class="relative">
                          <img
                            class="w-full h-[200px] object-cover"
                            alt="Step 6 image"
                            src="<?php echo get_template_directory_uri();?>/assets/rectangle-13-4.png"
                          />
                          <div
                            class="inline-flex items-center border transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent shadow hover:bg-primary/80 absolute top-5 left-5 bg-[#ff6b6b] text-white px-4 py-1.5 rounded-[20px] font-medium text-sm tracking-[1.00px] leading-7"
                          >
                            ご希望の方のみ
                          </div>
                        </div>
                        <div class="flex flex-col items-center gap-2 p-5">
                          <h3
                            class="w-fit mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#0d384a] text-base text-center tracking-[0] leading-6 whitespace-nowrap"
                          >
                            ⑥ 水素カプセル体験（20分）
                          </h3>
                          <p
                            class="self-stretch font-normal text-[#595a5a] text-sm tracking-[0] leading-6 [font-family:'Noto_Sans_JP',Helvetica]"
                          >
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。<br />テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                          </p>
                        </div>
                      </div>
                      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                      <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                  </div>
                  <div
                    class="rounded-xl border bg-card text-card-foreground w-full border-none shadow-none"
                  >
                    <div class="p-0">
                      <div class="flex flex-col gap-2.5 px-4">
                        <div class="flex items-start gap-2">
                          <div
                            class="w-[120px] font-['Roboto',Helvetica] text-textgray text-sm tracking-[1.00px] leading-[19.6px] font-normal"
                          >
                            所要時間
                          </div>
                          <div
                            class="flex-1 font-['Noto_Sans_JP',Helvetica] text-[#0d384a] text-[15px] leading-[21px] font-normal"
                          >
                            60分〜90分
                          </div>
                        </div>
                        <div
                          data-orientation="horizontal"
                          role="none"
                          class="shrink-0 bg-border h-[1px] w-full my-1 opacity-0"
                        ></div>
                        <div class="flex items-start gap-2">
                          <div
                            class="w-[120px] font-['Roboto',Helvetica] text-textgray text-sm tracking-[1.00px] leading-[19.6px] font-normal"
                          >
                            持ち物
                          </div>
                          <div
                            class="flex-1 font-['Noto_Sans_JP',Helvetica] text-[#0d384a] text-[15px] leading-[21px] font-normal"
                          >
                            ・飲料水<br />・タオル<br />・クレジットカード<br />・現金（ビジターのみ）<br />・本人確認書類
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <section
                id="faq"
                class="flex flex-col w-full max-w-[430px] items-center gap-10 pt-3"
              >
                <div class="flex flex-col items-center gap-1">
                  <h2
                    class="font-black text-4xl text-[#ff675f] text-center leading-9 [font-family:'Inter',Helvetica]"
                  >
                    FAQ
                  </h2>
                  <p
                    class="font-bold text-[15px] text-[#ff675f] text-center leading-[19.6px] [font-family:'Noto_Sans_JP',Helvetica]"
                  >
                    よくあるご質問
                  </p>
                </div>
                <div class="w-full px-[30px]">
                  <div
                    class="w-full flex flex-col gap-5"
                    data-orientation="vertical"
                  >
                    <div class="w-[370px] p-5 bg-white rounded-[20px]">
                      <button
                        onclick="toggleAccordion(1)"
                        class="w-full flex justify-between items-center text-[#0D384B]"
                      >
                        <span>トレーニングには何が必要？</span>
                        <span
                          id="icon-1"
                          class="text-[#0D384B] transition-transform duration-300"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            class="w-4 h-4"
                          >
                            <path
                              d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"
                            />
                          </svg>
                        </span>
                      </button>
                      <div
                        id="content-1"
                        class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
                      >
                        <div class="pt-[10px] text-[15px] text-[#0D384B]">
                          トレーニングにはお飲み物とタオルをお持ちください。室内シューズ・運動服は貸し出しがございますので不要です。
                        </div>
                      </div>
                    </div>

                    <!-- Accordion Item 2 -->
                    <div class="w-[370px] p-5 bg-white rounded-[20px]">
                      <button
                        onclick="toggleAccordion(2)"
                        class="w-full flex justify-between items-center text-[#0D384B]"
                      >
                        <span>体験のトレーニングは何をする？</span>
                        <span
                          id="icon-2"
                          class="text-[#0D384B] transition-transform duration-300"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            class="w-4 h-4"
                          >
                            <path
                              d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"
                            />
                          </svg>
                        </span>
                      </button>
                      <div
                        id="content-2"
                        class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
                      >
                        <div class="pt-[10px] text-[15px] text-[#0D384B]">
                          約60分間で、カウンセリング、2~3種目の体験トレーニングを行います。酸素水素浴の体験もご希望の方は約90分間の体験となります。
                        </div>
                      </div>
                    </div>

                    <!-- Accordion Item 3 -->
                    <div class="w-[370px] p-5 bg-white rounded-[20px]">
                      <button
                        onclick="toggleAccordion(3)"
                        class="w-full flex justify-between items-center text-[#0D384B]"
                      >
                        <span>酸素水素浴とは？</span>
                        <span
                          id="icon-3"
                          class="text-[#0D384B] transition-transform duration-300"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 16 16"
                            fill="currentColor"
                            class="w-4 h-4"
                          >
                            <path
                              d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z"
                            />
                          </svg>
                        </span>
                      </button>
                      <div
                        id="content-3"
                        class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out"
                      >
                        <div class="pt-[10px] text-[15px] text-[#0D384B] pr-1">
                          今まであった酸素カプセルの効果（疲労回復、ケガの早期回復、冷え性など）に、水素の力を加えることにより、美肌、エイジングケア、病気の予防の効果がございます。<br />
                          弊社に設置してあるカプセルは、世界で唯一高気圧環境の中で酸素と水素を同時に吸収できる特許を取得している技術により、常に新鮮な水素を生成してカプセルに送り込み、体内で吸収することができます。<br />
                          ブログでより詳しく記載しておりますので、そちらもご覧ください。
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <div
                id="access"
                class="flex flex-col w-full max-w-[430px] items-center justify-end px-5 pb-0 pt-3 relative"
              >
                <div
                  class="inline-flex flex-col items-center gap-1 relative z-[1]"
                >
                  <div
                    class="relative w-fit mt-[-1.00px] [font-family:'Inter',Helvetica] font-black text-[#ff675f] text-4xl text-center tracking-[0] leading-9 whitespace-nowrap"
                  >
                    access
                  </div>
                  <div
                    class="w-fit font-bold text-[#ff675f] text-center leading-[19.6px] whitespace-nowrap relative [font-family:'Noto_Sans_JP',Helvetica] text-[15px] tracking-[0]"
                  >
                    アクセス
                  </div>
                </div>
                <div
                  class="w-full max-w-[430px] pt-10 pb-0 px-0 mt-[-1.39e-12px] z-0 flex flex-col items-start relative"
                >
                  <div
                    class="flex flex-col w-full max-w-[430px] items-center justify-end gap-10 pt-0 pb-20 px-0 relative"
                  >
                    <div
                      class="rounded-xl border bg-card text-card-foreground flex w-full max-w-[390px] items-center justify-center relative border-none shadow-none"
                    >
                      <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6562.025640653919!2d135.81632478601568!3d34.67962590312199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60013bb8c17980cd%3A0x3a18782556cfd2dd!2zVW5pY2_jg5Hjg7zjgr3jg4rjg6vjgrjjg6BKUuWliOiJr-W6lw!5e0!3m2!1sja!2sjp!4v1749030637485!5m2!1sja!2sjp"
                        width="600"
                        height="450"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                      ></iframe>
                    </div>
                    <div
                      class="flex flex-col w-full max-w-[390px] items-start relative"
                    >
                      <div
                        class="flex w-full max-w-[390px] items-start gap-10 relative"
                      >
                        <div
                          class="inline-flex max-w-[390px] items-start justify-center pt-5 pb-0 px-0 relative flex-[0_0_auto] border-t [border-top-style:solid] border-[#515a5e]"
                        >
                          <div
                            class="flex max-w-[120px] w-[120px] items-center relative"
                          >
                            <div
                              class="relative w-fit mt-[-1.00px] [font-family:'Archivo',Helvetica] font-semibold text-[#515a5e] text-[13px] tracking-[0] leading-[19.5px] whitespace-nowrap"
                            >
                              ADDRESS
                            </div>
                          </div>
                        </div>
                        <div
                          class="gap-2 flex flex-col max-w-[390px] items-start px-0 py-3 relative flex-1 grow border-t [border-top-style:solid] border-[#515a5e26]"
                        >
                          <div
                            class="relative w-[230px] mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#515a5ebf] text-[13px] tracking-[0] leading-[13px]"
                          >
                            〒630-8244
                          </div>
                          <div
                            class="relative w-[230px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#515a5e] text-[13px] tracking-[0] leading-[16.2px]"
                          >
                            奈良県奈良市三条町606-99<br />ミユキシティーマンション102
                          </div>
                        </div>
                      </div>
                      <div
                        class="flex w-full max-w-[390px] items-start gap-10 relative"
                      >
                        <div
                          class="inline-flex max-w-[390px] items-start justify-center pt-5 pb-0 px-0 relative flex-[0_0_auto] border-t [border-top-style:solid] border-[#515a5e]"
                        >
                          <div
                            class="flex max-w-[120px] w-[120px] items-center relative"
                          >
                            <div
                              class="relative w-fit mt-[-1.00px] [font-family:'Archivo',Helvetica] font-semibold text-[#515a5e] text-[13px] tracking-[0] leading-[19.5px] whitespace-nowrap"
                            >
                              ACCESS
                            </div>
                          </div>
                        </div>
                        <div
                          class="gap-[3.62px] flex flex-col max-w-[390px] items-start px-0 py-3 relative flex-1 grow border-t [border-top-style:solid] border-[#515a5e26]"
                        >
                          <div
                            class="relative w-[230px] mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#515a5e] text-[13px] tracking-[0] h-[33px] leading-[16.2px]"
                          >
                            JR奈良駅　徒歩4分
                          </div>
                        </div>
                      </div>
                      <div
                        class="flex w-full max-w-[390px] items-start gap-10 relative"
                      >
                        <div
                          class="inline-flex max-w-[390px] items-start justify-center pt-5 pb-0 px-0 relative flex-[0_0_auto] border-t [border-top-style:solid] border-[#515a5e]"
                        >
                          <div
                            class="flex max-w-[120px] w-[120px] items-center relative"
                          >
                            <div
                              class="relative w-fit mt-[-1.00px] [font-family:'Archivo',Helvetica] font-semibold text-[#515a5e] text-[13px] tracking-[0] leading-[19.5px] whitespace-nowrap"
                            >
                              OPEN HOUR
                            </div>
                          </div>
                        </div>
                        <div
                          class="gap-[3.62px] flex flex-col max-w-[390px] items-start px-0 py-3 relative flex-1 grow border-t [border-top-style:solid] border-[#515a5e26]"
                        >
                          <div
                            class="relative w-[230px] mt-[-1.00px] [font-family:'Noto_Sans_JP',Helvetica] font-medium text-[#515a5e] text-[13px] tracking-[0] leading-[13px]"
                          >
                            <span class="leading-[20.8px]"
                              >平日　　10:00〜21:30 土日祝　9:30〜19:30 </span
                            ><span class="text-[11px] leading-[17.6px]"
                              >※水曜日のみ酸素・水素浴専用営業
                              ※営業時間は、今後変更となる可能性もございます</span
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <section
                class="relative flex flex-col items-center gap-10 px-5 py-20 bg-[#ff6b6b] rounded-[0px_0px_40px_40px] w-full"
              >
                <img
                  class="absolute w-[390px] h-8 top-0 left-5"
                  alt="Rectangle"
                  src="<?php echo get_template_directory_uri();?>/assets/rectangle-8.svg"
                />
                <header class="flex flex-col items-center gap-1">
                  <h2
                    class="font-['Inter',Helvetica] font-black text-white text-4xl text-center leading-9 whitespace-nowrap"
                  >
                    apply
                  </h2>
                  <p
                    class="font-['Noto_Sans_JP',Helvetica] font-bold text-white text-[15px] text-center leading-[19.6px] whitespace-nowrap"
                  >
                    無料体験お申し込み
                  </p>
                </header>
                <div
                  class="border bg-white text-card-foreground shadow relative w-[390px] rounded-[40px] border-none"
                >
                  <div class="flex items-center justify-center w-full p-0">
                    <div
                      class="w-full"
                      id="timerex_calendar"
                      data-url="https://timerex.net/s/unicobodymake_6e72/edca4aeb"
                    ></div>

                    <script
                      id="timerex_embed"
                      src="https://asset.timerex.net/js/embed.js"
                    ></script>

                    <script type="text/javascript">
                      TimerexCalendar();
                    </script>
                  </div>
                </div>
              </section>
            </div>
            <div
              class="fixed w-32 h-[54px] top-6 left-5 bg-[url(/clip-path-group-2.png)] bg-[100%_100%]"
            ></div>
            <button
              class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 px-4 py-2 w-[180px] h-[60px] fixed bottom-5 right-5 bg-[#eb4747] rounded-[45.5px] shadow-[0px_16px_30px_#515a5e59] text-white hover:bg-[#d43d3d]"
            >
              <div
                class="relative [font-family:'Noto_Sans_JP',Helvetica] font-normal text-white text-[15px] text-center tracking-[1.20px] leading-[21px]"
              >
                まずは無料体験を<br />予約する
              </div>
              <div
                class="absolute w-[26px] h-7 top-[33px] left-[151px] bg-cover bg-[50%_50%]"
              >
                <img alt="gif" src="<?php echo get_template_directory_uri();?>/assets/click.gif" />
              </div>
            </button>
          </div>
        </div>
      </div>
      <div
        class="flex flex-col gap-6 text-white my-auto [@media(max-width:800px)]:hidden"
      >
        <a class="flex flex-col gap-0 cursor-pointer" href="#feature">
          <div class="font-[Inter] text-base font-[900] leading-[1.6]">
            feature
          </div>
          <div class="font-[Inter] text-xl font-[500] leading-[1.6]">
            続く秘訣
          </div>
        </a>
        <a class="flex flex-col gap-0 cursor-pointer" href="#facilities">
          <div class="font-[Inter] text-base font-[900] leading-[1.6]">
            facilities
          </div>
          <div class="font-[Inter] text-xl font-[500] leading-[1.6]">
            安心・嬉しい4つの設備
          </div>
        </a>
        <a class="flex flex-col gap-0 cursor-pointer" href="#plan">
          <div class="font-[Inter] text-base font-[900] leading-[1.6]">
            plan
          </div>
          <div class="font-[Inter] text-xl font-[500] leading-[1.6]">
            料金プラン
          </div>
        </a>
        <a class="flex flex-col gap-0 cursor-pointer" href="#gym">
          <div class="font-[Inter] text-base font-[900] leading-[1.6]">
            gym visit
          </div>
          <div class="font-[Inter] text-xl font-[500] leading-[1.6]">
            体験の流れ
          </div>
        </a>
        <a class="flex flex-col gap-0 cursor-pointer" href="#faq">
          <div class="font-[Inter] text-base font-[900] leading-[1.6]">faq</div>
          <div class="font-[Inter] text-xl font-[500] leading-[1.6]">
            よくあるご質問
          </div>
        </a>
        <a class="flex flex-col gap-0 cursor-pointer" href="#access">
          <div class="font-[Inter] text-base font-[900] leading-[1.6]">
            access
          </div>
          <div class="font-[Inter] text-xl font-[500] leading-[1.6]">
            アクセス
          </div>
        </a>
      </div>
      <div
        class="slideY-img [@media(max-width:600px)]:hidden absolute right-10"
        id="slide"
      >
        <div class="flowingY-text">
          <img src="<?php echo get_template_directory_uri();?>/assets/vertical_slogan.svg" />
        </div>
      </div>
    </div>
  </body>

  <script>
    function toggleAccordion(index) {
      const content = document.getElementById(`content-${index}`);
      const icon = document.getElementById(`icon-${index}`);

      // SVG for Minus icon
      const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;

      // SVG for Plus icon
      const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;

      // Toggle the content's max-height for smooth opening and closing
      if (content.style.maxHeight && content.style.maxHeight !== "0px") {
        content.style.maxHeight = "0";
        icon.innerHTML = plusSVG;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        icon.innerHTML = minusSVG;
      }
    }

    const icon4 = document.getElementById("icon-4");
    const content4 = document.getElementById("content-4");
    const close4 = document.getElementById("close-4");

    // Start hidden
    content4.classList.remove("show");

    icon4.addEventListener("click", () => {
      content4.classList.add("show");
      icon4.style.display = "none";
    });

    close4.addEventListener("click", () => {
      content4.classList.remove("show");
      icon4.style.display = "flex";
    });

    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides((slideIndex += n));
    }

    function currentSlide(n) {
      showSlides((slideIndex = n));
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      if (n > slides.length) {
        slideIndex = 1;
      }
      if (n < 1) {
        slideIndex = slides.length;
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex - 1].style.display = "block";
    }

    document.addEventListener("DOMContentLoaded", () => {
      const slideContainer = document.querySelector(".slideX-img");
      const flowingText = document.querySelector(".flowingX-text");

      console.log("ss");
      // Create initial set of flowing elements
      const createFlowingElement = () => {
        const element = document.createElement("div");
        element.className = "flowingX-text";
        element.innerHTML = flowingText.innerHTML;
        return element;
      };

      // Add initial elements
      for (let i = 0; i < 4; i++) {
        slideContainer.appendChild(createFlowingElement());
      }

      // Remove the original template element
      flowingText.remove();

      const flowingElements = document.querySelectorAll(".flowingX-text");

      // Set up animation for each element
      flowingElements.forEach((element, index) => {
        const textWidth = element.offsetWidth;
        const duration = (textWidth / 20) * 3;
        element.style.animationDuration = `${duration}s`;
        element.style.animationDelay = `${(index * duration) / 3}s`;
      });

      // Handle animation end
      slideContainer.addEventListener("animationend", (e) => {
        if (e.target.classList.contains("flowingX-text")) {
          // Remove the element that finished animation
          e.target.remove();
          // Add new element at the end
          const newElement = createFlowingElement();
          slideContainer.appendChild(newElement);

          // Set up animation for the new element
          const textWidth = newElement.offsetWidth;
          const duration = textWidth / 30;
          newElement.style.animationDuration = `${duration}s`;
        }
      });
    });

    // ------------------------------ Y ----------------------

    const slideContainerY = document.querySelector(".slideY-img");
    const flowingTextY = document.querySelector(".flowingY-text");

    // Create initial set of flowing elements
    const createFlowingElementY = () => {
      const element = document.createElement("div");
      element.className = "flowingY-text";
      element.innerHTML = flowingTextY.innerHTML;
      return element;
    };

    // Add initial elements
    for (let i = 0; i < 4; i++) {
      slideContainerY.appendChild(createFlowingElementY());
    }

    // Remove the original template element
    flowingTextY.remove();

    const flowingElements = document.querySelectorAll(".flowingY-text");

    // Set up animation for each element
    flowingElements.forEach((element, index) => {
      const textWidth = element.offsetWidth;
      const duration = (textWidth / 20) * 3;
      element.style.animationDuration = `${duration}s`;
      element.style.animationDelay = `${(index * duration) / 3}s`;
    });

    // Handle animation end
    slideContainerY.addEventListener("animationend", (e) => {
      if (e.target.classList.contains("flowingY-text")) {
        // Remove the element that finished animation
        e.target.remove();
        // Add new element at the end
        const newElement = createFlowingElementY();
        slideContainerY.appendChild(newElement);

        // Set up animation for the new element
        const textWidth = newElement.offsetWidth;
        const duration = textWidth / 20;
        newElement.style.animationDuration = `${duration}s`;
      }
    });
  </script>
</html>
