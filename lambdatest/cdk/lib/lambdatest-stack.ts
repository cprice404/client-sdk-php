import * as cdk from 'aws-cdk-lib';
import { Construct } from 'constructs';
// import * as sqs from 'aws-cdk-lib/aws-sqs';
import * as lambda from 'aws-cdk-lib/aws-lambda';
import {DockerImageCode} from 'aws-cdk-lib/aws-lambda';
import {Platform} from "aws-cdk-lib/aws-ecr-assets";

export class LambdatestStack extends cdk.Stack {
  constructor(scope: Construct, id: string, props?: cdk.StackProps) {
    super(scope, id, props);

    // The code that defines your stack goes here

    // example resource
    // const queue = new sqs.Queue(this, 'LambdatestQueue', {
    //   visibilityTimeout: cdk.Duration.seconds(300)
    // });

    new lambda.DockerImageFunction(this, "lambdatest", {
        architecture: lambda.Architecture.ARM_64,
        code: DockerImageCode.fromImageAsset("../docker", {
            platform: Platform.LINUX_ARM64
        }),



    })

  }
}
