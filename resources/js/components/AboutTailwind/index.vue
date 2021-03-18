<template>
    <div>
        <div class="text-superxl font-zmxfont">hahaha哈哈哈</div>
        <div class="text-superxl font-canterbury">qwerasdf</div>
        <h6>自定顏色</h6>
        <div class="bg-bootstrap_primary text-white">手榴蛋</div>
        <div class="bg-bootstrap_secondary text-white">手榴蛋</div>
        <div class="bg-bootstrap_success text-white">手榴蛋</div>
        <div class="bg-bootstrap_danger text-white">手榴蛋</div>
        <div class="bg-bootstrap_info text-white ">手榴蛋</div>
        <hr class="mt-5 mb-5" />
        <h6>預設 layout</h6>
        <div class="text-center bg-gray-100 mt-3 ">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-10 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-10 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <hr class="mt-5 mb-5" />
        <h6>row layout(水平)</h6>
        <div class="flex flex-row text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-10 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-10 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <h6>row reverse layout(水平反轉)</h6>
        <div class="flex flex-row-reverse text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-10 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-10 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <hr class="mt-5 mb-5" />
        <h6>col layout(垂直)</h6>
        <div class="flex flex-col text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-10 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-10 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <h6>col reverse layout(垂直反轉)</h6>
        <div class="flex flex-col-reverse text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-10 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-10 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <hr class="mt-5 mb-5" />
        <h6>靠左</h6>
        <div class="flex justify-start text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-10 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-10 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <h6>靠右</h6>
        <div class="flex justify-end text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-10 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-10 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <h6>置中</h6>
        <div class="flex justify-center text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-10 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-10 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <hr class="mt-5 mb-5" />
        <h6>平均分佈 between</h6>
        <div class="flex justify-between text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-10 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-10 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <h6>平均分佈 around</h6>
        <div class="flex justify-around text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-10 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-10 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <h6>平均分佈 evenly</h6>
        <div class="flex justify-evenly text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-10 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-10 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <hr class="mt-5 mb-5" />
        <h6>水平對齊 原始</h6>
        <div class="text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-20 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-32 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <h6>水平對齊 靠上</h6>
        <div class="flex items-start text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-20 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-32 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <h6>水平對齊 置中</h6>
        <div class="flex items-center text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-20 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-32 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <h6>水平對齊 靠下</h6>
        <div class="flex items-end text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-20 bg-bootstrap_success text-white m-2">2</div>
            <div class="w-10 h-32 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <h6>水平對齊 baseline(文字的位置)</h6>
        <div class="flex items-baseline text-center bg-gray-100 mt-3 mb-3">
            <div class="w-10 h-10 bg-bootstrap_primary text-white m-2">1</div>
            <div class="w-10 h-20 bg-bootstrap_success text-white m-2 flex  justify-center items-center">2</div>
            <div class="w-10 h-32 bg-bootstrap_danger text-white m-2">3</div>
        </div>
        <hr class="mt-5 mb-5" />
        <div class="w-20 h-20 bg-yellow-500"></div>
        <div
            class="w-20 h-20 bg-yellow-500 sm:bg-bootstrap_primary md:bg-bootstrap_success lg:bg-bootstrap_secondary xl:bg-bootstrap_danger 2xl:bg-bootstrap_info"
        ></div>
        <hr class="mt-5 mb-5" />
        <div>鮭魚之亂</div>
        <div class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-komabig">鮭魚之亂</div>
        <hr class="mt-5 mb-5" />
        <div class="text-3xl">兩桌吃快13000元，真的是要同鮭魚盡吧</div>
        <div class="flex justify-start lg:justify-center 2xl:justify-end text-3xl">
            兩桌吃快13000元，真的是要同鮭魚盡吧
        </div>
        <hr class="mt-5 mb-5" />
        <div class="flex justify-around bg-gray-200 p-5">
            <div>
                <img :src="fish" alt="" class="w-80" />
                <div>
                    <div>辛苦了</div>
                    <div>壽司郎店員臉真臭</div>
                </div>
            </div>
            <div class="bg-white rounded overflow-hidden shadow-md">
                <img :src="fish" alt="" class="w-80" />
                <div class="p-2">
                    <div class="font-bold text-lg">辛苦了</div>
                    <div class="text-gray-500 text-sm">壽司郎店員臉真臭</div>
                    <div class="p-2 border-t border-gray-200">
                        <div class="flex justify-end text-xs text-red-500">我愛鮭魚我驕傲：2021年3月17日</div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-5 mb-5" />
    </div>
</template>

<script>
export default {
    data() {
        return {
            fish: './public/images/3470237_1_1.jpg',
        };
    },
};
</script>
