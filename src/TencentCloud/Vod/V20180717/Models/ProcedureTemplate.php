<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getName() 获取任务流名字。
 * @method void setName(string $Name) 设置任务流名字。
 * @method string getType() 获取任务流模板类型，取值范围：
<li>Preset：系统预置任务流模板；</li>
<li>Custom：用户自定义任务流模板。</li>
 * @method void setType(string $Type) 设置任务流模板类型，取值范围：
<li>Preset：系统预置任务流模板；</li>
<li>Custom：用户自定义任务流模板。</li>
 * @method MediaProcessTaskInput getMediaProcessTask() 获取视频处理类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMediaProcessTask(MediaProcessTaskInput $MediaProcessTask) 设置视频处理类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiContentReviewTaskInput getAiContentReviewTask() 获取AI 智能内容审核类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiContentReviewTask(AiContentReviewTaskInput $AiContentReviewTask) 设置AI 智能内容审核类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiAnalysisTaskInput getAiAnalysisTask() 获取AI 智能内容分析类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiAnalysisTask(AiAnalysisTaskInput $AiAnalysisTask) 设置AI 智能内容分析类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AiRecognitionTaskInput getAiRecognitionTask() 获取AI 内容识别类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAiRecognitionTask(AiRecognitionTaskInput $AiRecognitionTask) 设置AI 内容识别类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setCreateTime(string $CreateTime) 设置模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method string getUpdateTime() 获取模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setUpdateTime(string $UpdateTime) 设置模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 */

/**
 *任务流模板详情
 */
class ProcedureTemplate extends AbstractModel
{
    /**
     * @var string 任务流名字。
     */
    public $Name;

    /**
     * @var string 任务流模板类型，取值范围：
<li>Preset：系统预置任务流模板；</li>
<li>Custom：用户自定义任务流模板。</li>
     */
    public $Type;

    /**
     * @var MediaProcessTaskInput 视频处理类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MediaProcessTask;

    /**
     * @var AiContentReviewTaskInput AI 智能内容审核类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiContentReviewTask;

    /**
     * @var AiAnalysisTaskInput AI 智能内容分析类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiAnalysisTask;

    /**
     * @var AiRecognitionTaskInput AI 内容识别类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AiRecognitionTask;

    /**
     * @var string 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $CreateTime;

    /**
     * @var string 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $UpdateTime;
    /**
     * @param string $Name 任务流名字。
     * @param string $Type 任务流模板类型，取值范围：
<li>Preset：系统预置任务流模板；</li>
<li>Custom：用户自定义任务流模板。</li>
     * @param MediaProcessTaskInput $MediaProcessTask 视频处理类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiContentReviewTaskInput $AiContentReviewTask AI 智能内容审核类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiAnalysisTaskInput $AiAnalysisTask AI 智能内容分析类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AiRecognitionTaskInput $AiRecognitionTask AI 内容识别类型任务参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 模板创建时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     * @param string $UpdateTime 模板最后修改时间，使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MediaProcessTask",$param) and $param["MediaProcessTask"] !== null) {
            $this->MediaProcessTask = new MediaProcessTaskInput();
            $this->MediaProcessTask->deserialize($param["MediaProcessTask"]);
        }

        if (array_key_exists("AiContentReviewTask",$param) and $param["AiContentReviewTask"] !== null) {
            $this->AiContentReviewTask = new AiContentReviewTaskInput();
            $this->AiContentReviewTask->deserialize($param["AiContentReviewTask"]);
        }

        if (array_key_exists("AiAnalysisTask",$param) and $param["AiAnalysisTask"] !== null) {
            $this->AiAnalysisTask = new AiAnalysisTaskInput();
            $this->AiAnalysisTask->deserialize($param["AiAnalysisTask"]);
        }

        if (array_key_exists("AiRecognitionTask",$param) and $param["AiRecognitionTask"] !== null) {
            $this->AiRecognitionTask = new AiRecognitionTaskInput();
            $this->AiRecognitionTask->deserialize($param["AiRecognitionTask"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
